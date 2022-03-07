<?php

namespace App\Controller;

use App\Entity\Academie;
use App\Form\AcademieType;
use App\Repository\AcademieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Flex\Options;




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
    /**
     * @Route("/pdf/{id}", name="pdf" ,  methods={"GET"})
     */
    public function pdf($id,AcademieRepository $repository)
    {
        $reponse = $this->getDoctrine()->getRepository(Academie::class)->findOneBy( ['id' => $id]);

      #  $academie = $repository->find($id);


        $pdfOptions = new Options();

        $pdfOptions->get('defaultFont', 'Arial');
        $dompdf = new Dompdf( $pdfOptions);
        $html="<style>
.clearfix:after {
  content: \"\";
  display: table;
  clear: both;
}
a {
  color: #001028;
  text-decoration: none;
}
body {
  font-family: Junge;
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-size: 14px; 
}
.arrow {
  margin-bottom: 4px;
}
.arrow.back {
  text-align: right;
}
.inner-arrow {
  padding-right: 10px;
  height: 30px;
  display: inline-block;
  background-color: rgb(233, 125, 49);
  text-align: center;
  line-height: 30px;
  vertical-align: middle;
}
.arrow.back .inner-arrow {
  background-color: rgb(233, 217, 49);
  padding-right: 0;
  padding-left: 10px;
}
.arrow:before,
.arrow:after {
  content:'';
  display: inline-block;
  width: 0; height: 0;
  border: 15px solid transparent;
  vertical-align: middle;
}
.arrow:before {
  border-top-color: rgb(233, 125, 49);
  border-bottom-color: rgb(233, 125, 49);
  border-right-color: rgb(233, 125, 49);
}
.arrow.back:before {
  border-top-color: transparent;
  border-bottom-color: transparent;
  border-right-color: rgb(233, 217, 49);
  border-left-color: transparent;
}
.arrow:after {
  border-left-color: rgb(233, 125, 49);
}
.arrow.back:after {
  border-left-color: rgb(233, 217, 49);
  border-top-color: rgb(233, 217, 49);
  border-bottom-color: rgb(233, 217, 49);
  border-right-color: transparent;
}
.arrow span { 
  display: inline-block;
  width: 80px; 
  margin-right: 20px;
  text-align: right; 
}
.arrow.back span { 
  margin-right: 0;
  margin-left: 20px;
  text-align: left; 
}
h1 {
  color: #5D6975;
  font-family: Junge;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  border-top: 1px solid #5D6975;
  border-bottom: 1px solid #5D6975;
  margin: 0 0 2em 0;
}
h1 small { 
  font-size: 0.45em;
  line-height: 1.5em;
  float: left;
} 
h1 small:last-child { 
  float: right;
} 
#project { 
  float: left; 
}
#company { 
  float: right; 
}
table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 30px;
}
table th,
table td {
  text-align: center;
}
table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}
table .service,
table .desc {
  text-align: left;
}
table td {
  padding: 20px;
  text-align: right;
}
table td.service,
table td.desc {
  vertical-align: top;
}
table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}
table td.sub {
  border-top: 1px solid #C1CED9;
}
table td.grand {
  border-top: 1px solid #5D6975;
}
table tr:nth-child(2n-1) td {
  background: #EEEEEE;
}
table tr:last-child td {
  background: #DDDDDD;
}
#details {
  margin-bottom: 30px;
}
footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}</style>
<h1>Sport</h1>
 <!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Sport</title>
    <link rel=\"stylesheet\" href=\"style.css\" media=\"all\" />
  </head>
  <body>
    <main>
      <h2  class=\"clearfix\"><small><span>Name</span>
      <br />".$reponse->getName()."
      <table>
        <thead>
        
          <tr>
            <th class=\"clearfix\">Nombre De Seances</th>
          </tr>
        </thead><tbody>
        <tr><td  class=\"service\">".$reponse-> getNbrSeances()."</td>
        </tr>
        
        
 </tbody>
      </table>
       </br></br></br></br></br>
     
  
     
    </main>
    
  </body>
</html>";




        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        //  $dompdf->stream();
        // Output the generated PDF to Browser (force download)
        $dompdf->stream($reponse->getId(), [
            "Attachment" => true
        ]);
        return $this->renderView('academie/index.html.twig', [
            'academies' => $reponse
        ]);
    }
}
