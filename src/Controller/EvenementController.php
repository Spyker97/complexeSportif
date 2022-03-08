<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use App\Repository\TypeEventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use MercurySeries\FlashyBundle\FlashyNotifier;

use App\Entity\EvenementSearch;
use App\Form\EvenementSearchType;


/**
 * @Route("/evenement")
 */
class EvenementController extends AbstractController
{
    
    /**
     * @Route("/", name="evenement_index", methods={"GET"})
     */
    public function index( EvenementRepository $evenementRepository ): Response
    {  $donnees = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
       
        
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
        
    }
    /**
     * @Route("/indexf", name="evenement_indexf", methods={"GET"})
     */
    public function indexf( Request $request , EvenementRepository $evenementRepository, PaginatorInterface $paginator  ): Response
    {  $donnees = $this->getDoctrine()->getRepository(Evenement::class)->findAll();
       
        $evenement = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        
        return $this->render('evenement/indexf.html.twig', [
            'evenements' => $evenement,
        ]);
        
    }

    /**
     * @Route("/new", name="evenement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager , FlashyNotifier $flashy): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

             $file = $form->get('photo')->getData();
            if ($file != null){
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$fileName);
                $evenement->setPhoto($fileName);
            }
            $entityManager->persist($evenement);
            $entityManager->flush();
            $flashy->success('Event created!', 'http://your-awesome-link.com');


            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @route("/stat",name="sta")
     */
    public function statisti(EvenementRepository $evenement, TypeEventRepository $TypeEventRepository)
    {

        $opp=$evenement->findAll();


        return $this->render("evenement/statistique.html.twig",['Reg'=>$opp]);

    }

    /**
     * @Route("/{id}", name="evenement_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="evenement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager, FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('photo')->getData();
            if ($file != null){
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$fileName);
                $evenement->setPhoto($fileName);
            }
            $entityManager->flush();
            $flashy->success('Event update!', 'http://your-awesome-link.com');


            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }
  

  

    /**
     * @Route("/{id}", name="evenement_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
            $flashy->warning('Event Deleted', 'http://your-awesome-link.com');

        }

        return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/tri/eve", name="evenement_tri")
     */
    public function Tri(Request $request,EvenementRepository $repository,FlashyNotifier $flashy): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        if($order== "Croissant"){
            $evenements = $repository->tri_asc();
        }
        else {
            $evenements = $repository->tri_desc();
        }
        $flashy->info('jaoek behi', 'http://your-awesome-link.com');

        // Render the twig view
        return $this->render('evenement/indexf.html.twig', [
            'evenements' => $evenements
        ]);
}
/**
     * @Route("/recherche/eve", name="evenement_search")
     */
    public function recherche(Request $request, EvenementRepository $evenementRepository){
        $data=$request->get('data');
        $evenement=$evenementRepository->reche($data);
        return $this->render('evenement/index.html.twig', [
            'evenements' =>  $evenement,


        ]);


    }
    /**
     * @Route("/evenement/ajax_search", name="ajax_search" ,methods={"GET"})
     * @param Request $request
     * @param EvenementRepository $EvenementRepository
     * @return Response
     */
    public function searchAction(Request $request,EvenementRepository $evenementRepository) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $evenements =$evenementRepository->SearchNom($requestString);
        if(!$evenements) {
            $result['evenements']['error'] = "evenements non trouvée ";
        } else {
            $result['evenements'] = $this->getRealEntities($evenements);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($evenements){
        foreach ($evenements as $evenement){
            $realEntities[$evenement->getId()] = [$evenement->getPhoto(),$evenement->getTitre()];

        }
        return $realEntities;
    }

      /**
     * @Route("/list/pdf", name="evnt_pdf", methods={"GET"})
     */
    public function pdf(EvenementRepository $evenementRepository): Response
    {



        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $evenement = $evenementRepository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('evenement/listepdf.html.twig', [
            'evenements' => $evenement,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("listepdf.pdf", [
            "Attachment" => true
        ]);
    }

    /**
     * @Route("/par/{id}", name="evenement_participation", methods={"GET"})
     */
    public function participer(Evenement $evenement): Response
    {
        return $this->render('evenement/participation.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    
}
