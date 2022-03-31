<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator
use App\Entity\ProduitSearch;
use App\Form\ProduitSearchType;
use MercurySeries\FlashyBundle\FlashyNotifier;
/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/indexf", name="produit_indexf", methods={"GET"})
     */
    public function indexf(Request $request,ProduitRepository $produitRepository,PaginatorInterface $paginator): Response
    {
        $donnees = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        $produit = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1),6
        );
        return $this->render('produit/indexf.html.twig', [
            'produits' => $produit ,]);
    }

    /**
     * @Route("/new", name="produit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getImg();
            if ($file != null){
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$fileName);
                $produit->setImg($fileName);

            }
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/newf", name="produit_newf", methods={"GET", "POST"})
     */
    public function newf(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getImg();
            if ($file != null){
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$fileName);
                $produit->setImg($fileName);

            }
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('produit_indexf', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/newf.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_show", methods={"GET"})
     */
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{id}/showf", name="produit_showf", methods={"GET"})
     */
    public function showf(Produit $produit): Response
    {
        return $this->render('produit/showf.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/showrech/{id}", name="produit_showajax", methods={"GET"})
     */
    public function showrech(Produit $produit): Response
    {
        return $this->render('produit/showrech.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="produit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getImg();
            if ($file != null){
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$fileName);
                $produit->setImg($fileName);

            }
            $entityManager->flush();

            return $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/editf", name="produit_editf", methods={"GET", "POST"})
     */
    public function editf(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getImg();
            if ($file != null){
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),$fileName);
                $produit->setImg($fileName);

            }
            $entityManager->flush();

            return $this->redirectToRoute('produit_indexf', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/editf.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_delete", methods={"POST"})
     */
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}/deletef", name="produit_deletef", methods={"POST"})
     */
    public function deletef(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produit_indexf', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/Produit/ajax_search", name="ajax_search" ,methods={"GET"})
     * @param Request $request
     * @param ProduitRepository $produitRepository
     * @return Response
     */
    public function searchAction(Request $request,ProduitRepository $produitRepository) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $produits =$produitRepository->SearchNom($requestString);
        if(!$produits) {
            $result['produits']['error'] = "produit non trouvée ";
        } else {
            $result['produits'] = $this->getRealEntities($produits);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($produits){
        foreach ($produits as $produit){
            $realEntities[$produit->getId()] = [$produit->getImg(),$produit->getNom()];

        }
        return $realEntities;
    }


}
