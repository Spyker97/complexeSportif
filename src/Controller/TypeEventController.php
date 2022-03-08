<?php

namespace App\Controller;

use App\Entity\TypeEvent;
use App\Form\TypeEventType;
use App\Repository\TypeEventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/type/event")
 */
class TypeEventController extends AbstractController
{
    /**
     * @Route("/", name="type_event_index", methods={"GET"})
     */
    public function index(Request $request,TypeEventRepository $repository,PaginatorInterface $paginator): Response
    {

        //$repo=$this->getDoctrine()->getRepository(Terrain::class);
        $alltype=$repository->findAll();
        // Paginate the results of the query
        $typeEventRepository = $paginator->paginate(
        // Doctrine Query, not results
            $alltype,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );

        return $this->render('type_event/index.html.twig', [
            'type_events' => $typeEventRepository,
        ]);
    }

    /**
     * @Route("/new", name="type_event_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $typeEvent = new TypeEvent();
        $form = $this->createForm(TypeEventType::class, $typeEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($typeEvent);
            $entityManager->flush();

            return $this->redirectToRoute('type_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_event/new.html.twig', [
            'type_event' => $typeEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_event_show", methods={"GET"})
     */
    public function show(TypeEvent $typeEvent): Response
    {
        return $this->render('type_event/show.html.twig', [
            'type_event' => $typeEvent,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_event_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, TypeEvent $typeEvent, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TypeEventType::class, $typeEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('type_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_event/edit.html.twig', [
            'type_event' => $typeEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_event_delete", methods={"POST"})
     */
    public function delete(Request $request, TypeEvent $typeEvent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeEvent->getId(), $request->request->get('_token'))) {
            $entityManager->remove($typeEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_event_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
