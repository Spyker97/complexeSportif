<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Terrain;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }


    /**
     * @param ReservationRepository $
     * @return void
     * @Route("/affichee",name="affichee",methods={"GET"})
     */
    Public function affiche(ReservationRepository $repository) {

        $res=$repository->findAll();
        return $this->render('reservation/affichee.html.twig',
            ['res'=>$res]);


    }
    /**
     * @param ReservationRepository $
     * @return void
     * @Route("/afficheee",name="afficheee", methods={"GET"})
     */
    Public function affichee(ReservationRepository $repository) {

        $res=$repository->findAll();
        return $this->render('reservation/afficheee.html.twig',
            ['res'=>$res]);


    }

    /**
     * @param $id
     * @param ReservationRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/supp/{id}" ,name="dd")
     *
     */
    function delete($id,ReservationRepository $repository ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $res=$repository->find($id);
        $em=$this-> getDoctrine()->getManager();
        $em->remove($res);
        $em->flush();
        return $this->redirectToRoute('affichee');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/res/add" , name="res_add")
     */
    function add(Request $request){
        $res=new Reservation();
        $terrain=new Terrain();
        $form=$this->createForm(ReservationType::class,$res);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ){

            $em=$this->getDoctrine()->getManager();
            $em->persist($res);
            $em->flush();
            return $this->redirectToRoute('test');
        }
        return $this->render('reservation/add.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param $id
     * @param ReservationType $repository
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/update_res/{id}",name="aa")
     */


    function update($id,ReservationRepository $repository,Request $request){
        $res=$repository->find($id);
        $form=$this->createForm(ReservationType::class,$res);
        $form->add('update',SubmitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("affichee");
        }
        return $this->render('reservation/update2.html.twig',[
            'a'=>$form->createView()
        ]);

    }


    /**
     * @Route("/pdf/{id}", name="pdf" ,  methods={"GET"})
     */
    public function pdf($id,ReservationRepository $repository)
    {

        $reservation = $repository->find($id);

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('reservation/pdf.html.twig', [
            'pdf' => $reservation
        ]);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        //  $dompdf->stream();
        // Output the generated PDF to Browser (force download)
        $dompdf->stream($reservation->getId(), [
            "Attachment" => true
        ]);
    }




}
