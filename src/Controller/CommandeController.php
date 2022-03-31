<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;

use Dompdf\Dompdf;
use Dompdf\Options;


/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/", name="commande_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        $commandeRepository->findAll();
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/indexf", name="commande_indexf", methods={"GET"})
     */
    public function indexf(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/indexf.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="commande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();
            $flashy->success('Commande added', 'http://your-awesome-link.com');


            return $this->redirectToRoute('commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/newf", name="commande_newf", methods={"GET", "POST"})
     */
    public function newf(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();
            $flashy->success('Commande added', 'http://your-awesome-link.com');


            return $this->redirectToRoute('commande_indexf', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/newf.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_show", methods={"GET"})
     */
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id}/showf", name="commande_showf", methods={"GET"})
     */
    public function showf(Commande $commande): Response
    {
        return $this->render('commande/showf.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $flashy->success('Commande Updated!', 'http://your-awesome-link.com');

            return $this->redirectToRoute('commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/editf", name="commande_editf", methods={"GET", "POST"})
     */
    public function editf(Request $request, Commande $commande, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response

    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $flashy->success('Commande updated!', 'http://your-awesome-link.com');

            return $this->redirectToRoute('commande_indexf', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/editf.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_delete", methods={"POST"})
     */
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
            $flashy->warning('Commande Deleted!', 'http://your-awesome-link.com');

        }

        return $this->redirectToRoute('commande_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}/deletef", name="commande_deletef", methods={"POST"})
     */
    public function deletef(Request $request, Commande $commande, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
            $flashy->warning('Commande Deleted!', 'http://your-awesome-link.com');

        }

        return $this->redirectToRoute('commande_indexf', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/recherchef/comm", name="commnde_search", methods={"POST"})
     */
    public function recherche(Request $request, CommandeRepository $commandeRepository){
        $data=$request->get('data');
        $commande=$commandeRepository->reche($data);
        return $this->render('commande/indexf.html.twig', [
            'commandes' =>  $commande,


        ]);


    }
    /**
     * @Route("/tri/comm", name="commande_tri")
     */
    public function Tri(Request $request,CommandeRepository $repository): Response
    {
        // Retrieve the entity manager of Doctrine
        $order=$request->get('type');
        if($order== "Croissant"){
            $commandes = $repository->tri_asc();
        }
        else {
            $commandes = $repository->tri_desc();
        }
        // Render the twig view
        return $this->render('commande/indexf.html.twig', [
            'commandes' => $commandes
        ]);
    }
    /**
     * @Route("/pdf/list", name="commande_pdf_back", methods={"GET"})
     */
    public function pdf(CommandeRepository $commandeRepository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $commande = $commandeRepository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('commande/Listepdfcmd.html.twig', [
            'commandes' => $commande,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Listepdfcmd.pdf", [
            "Attachment" => true
        ]);

    }

    /**
     * @route("/stat",name="sta")
     */
    public function statisti(CommandeRepository $repository,CommandeRepository $commandeRepository)
    {

        $opp=$repository->findAll();


        return $this->render("produit/statistique.html.twig",['Reg'=>$opp]);

    }

}
