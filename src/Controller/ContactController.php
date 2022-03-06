<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends AbstractController
{
    /**
     * @Route("/test", name="contact")
     */
    public function index(Request $request,  \Swift_Mailer $mailer)
    {
        $form= $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $contact= $form->getData();


            //Ici nous environs le mail
            $message = (new \Swift_Message($contact['subject']))
                ->setFrom($contact['email'])

                ->setTo('ahmedbhd97@gmail.com')

                ->setBody(
                    $this->renderView(
                        'contact/email.html.twig', ['contact' => $contact]
                    )
                )
            ;

            $mailer->send($message);
            $this->addFlash('success', 'Le message est bien éte envoyé');
            return  $this->redirectToRoute('test');
        }

        return $this->render('contact/contact.html.twig', [
            "form" => $form->createView()
        ]);
    }
}
