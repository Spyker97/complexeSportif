<?php

namespace App\Controller;

use App\Entity\Academie;
use App\Form\AcademieType;
use App\Repository\AcademieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/academie")
 */
class AcademieController extends AbstractController
{
    /**
     * @Route("/affiches", name="affiches")
     */
    public function index(): Response
    {
        $academie=$this->getDoctrine()->getRepository(Academie::class)->findAll();
        return $this->render('academie/index.html.twig', [
            'academies' => $academie
        ]);
    }

    /**
     * @Route("/new", name="academie_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $academie = new Academie();
        $form = $this->createForm(AcademieType::class, $academie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($academie);
            $entityManager->flush();

            return $this->redirectToRoute('affiches', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('academie/new.html.twig', [
            'academie' => $academie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="academie_show", methods={"GET"})
     */
    public function show(Academie $academie): Response
    {
        return $this->render('academie/show.html.twig', [
            'academie' => $academie,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="academie_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Academie $academie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AcademieType::class, $academie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('affiches', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('academie/edit.html.twig', [
            'academie' => $academie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="academie_delete")
     * Method ({"DELETE"})
     */
    public function delete(Request $request, $id): Response
    {
        $academie=$this->getDoctrine()->getRepository(Academie::class)->find($id);
        $entityManager=$this->getDoctrine()->getManager();
        $entityManager->remove($academie);
        $entityManager->flush();

        return $this->redirectToRoute('affiches');

    }
}
