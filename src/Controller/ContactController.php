<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Form\ContactTypee;
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
    /**
     * @Route ("/contact_email", name="contact_email")
     */
    public function indexx(Request $request,\Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactTypee::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            // On crée le message
            $message = (new \Swift_Message('Nouveau contact'))
                // On attribue l'expéditeur
                ->setFrom($contact['email'])
//                ->setFormat($contact['brochure'])
                // On attribue le destinataire
                ->setTo('ahmedbhd97@gmail.com')

                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'contact/email2.html.twig', ['contact' => $contact]
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi
        }
        return $this->render('contact/indexx.html.twig',['contactForm' => $form->createView()]);
    }


}
