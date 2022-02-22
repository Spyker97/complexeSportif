<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;


use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
        * @Route ("/inscription", name="security_registration")
     */
    public function regitration(Request $request, UserPasswordEncoderInterface $encoder){

        $user = new User();

        $form =$this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $entityManager= $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig',[
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/connexion", name="security_login")
     */
    public function login () {

        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout(){

    }
    /**
     * @Route("/user" , name="user")
     */
    public function userCin (){
        $user= $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render("security/user.html.twig",['users'=>$user]);

    }

    /**
     * @Route("/user/delete/{cin}" , name="delete_user")
     * Method({"DELETE"})
     */
    public function deletePersone(Request $request ,$cin) {

        $user= $this->getDoctrine()->getRepository(User::class)->find($cin);

        $entityManager= $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('user');

    }



}
