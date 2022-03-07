<?php

namespace App\Controller;

use App\Entity\Terrain;
use App\Form\TerrainType;
use App\Repository\TerrainRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class TerrainController extends AbstractController
{
    /**
     * @Route("/terrain", name="terrain")
     */
    public function index(): Response
    {
        return $this->render('terrain/index.html.twig', [
            'controller_name' => 'TerrainController',
        ]);
    }

    /**
     * @param TerrainRepository $repository
     * @return Response
     * @Route("/affiche",name="affiche")
     *
     */
    public function affiche(Request $request, PaginatorInterface $paginator,TerrainRepository $repository ){

        //$repo=$this->getDoctrine()->getRepository(Terrain::class);
        $allterrain=$repository->findAll();
        // Paginate the results of the query
        $terrain = $paginator->paginate(
        // Doctrine Query, not results
            $allterrain,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );

        return $this->render('terrain/affiche.html.twig',['terrain'=>$terrain]);
    }


    /**
     * @param TerrainRepository $repository
     * @return Response
     * @Route("/afficheterrain",name="afficheterrain")
     *
     */
    public function afficheterrain(TerrainRepository $repository ){
       // var_dump($this->getUser()->getCin());


        $terrain=$repository->findAll();
        return $this->render('terrain/afficheterrain.html.twig',['terrain'=>$terrain]);
    }

    /**
     * @return void
     * @Route("/sup/{id}" ,name="d")
     */
    function delete($id, TerrainRepository $repository ){
        $terrain=$repository->find($id);
        $em=$this-> getDoctrine()->getManager();
        $em->remove($terrain);
        $em->flush();
        return $this->redirectToRoute('affiche');
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("terrain/add")
     */
    function add(Request $request){
        $terrain=new Terrain();
        $form=$this->createForm(TerrainType::class,$terrain);
//     $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($terrain);
            $em->flush();
            return $this->redirectToRoute('affiche');
        }
        return $this->render('terrain/add.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    /**
     * @Route("/up/{id}",name="update")
     */
    function update($id,TerrainRepository $repository,Request $request){
        $terrain=$repository->find($id);
        $form=$this->createForm(TerrainType::class,$terrain);
        $form->add('update',SubmitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("affiche");
        }
        return $this->render('terrain/update.html.twig',[
            'f'=>$form->createView()
        ]);

    }
}
