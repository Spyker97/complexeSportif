<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/admiin", name="admiin")
     */
    public function admin(): Response
    {
        $user = new User();
        $user->setRoles([0]);

        $dump=$user;


        return $this->render('test/admin.html.twig', [
            'controller_name' => 'TestController','dump'=>$dump
        ]);
    }
}
