<?php

namespace App\Controller;

use App\Entity\ClientSearch;
use App\Entity\User;
use App\Form\ClientSearchType;
use App\Form\RegistrationType;


use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Doctrine\DBAL\Types\TextType;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Component\Pager\PaginatorInterface;
//use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Form\FormTypeInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Security\Core\User\UserInterface;


class SecurityController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
        * @Route ("/inscription", name="security_registration")
     */
    public function regitration(Request $request, UserPasswordEncoderInterface $encoder , MailerInterface $mailer){

        $user = new User();

        $form =$this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $user->setRoles(["ROLE_USER"]);

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                $email=(new TemplatedEmail())
                    ->from(new Address('ahmedbhd97@gmail.com', 'ComplexeSportif Bot'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email


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
     * @Route("/verify/email", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('security_login');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('security_login');
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
     * @Route("/user" , name="user" )
     */
    public function userCin (Request $request, PaginatorInterface $paginator, UserRepository $userRepository){


        $ClientSearch = new ClientSearch();
        $form = $this->createForm(ClientSearchType::class, $ClientSearch);
        $form->handleRequest($request);
        $alluser = [];
        $alluser = $this->getDoctrine()->getRepository(User::class)->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            $first_name = $ClientSearch->getFirstName();

            if ($first_name != ""){
                $first_name=$form['first_name']->getData();
            $alluser = $this->getDoctrine()->getRepository(User::class)->search($first_name);
            }
        }


        // Paginate the results of the query
        $user = $paginator->paginate(
        // Doctrine Query, not results
            $alluser,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render("security/user.html.twig",['users'=>$user ,'form'=>$form->createView()]);

    }

    /**
     * @Route("/user/delete/{cin}" , name="delete_user")
     * Method({"DELETE"})
     */
    public function deleteUser(Request $request ,$cin) {

        $user= $this->getDoctrine()->getRepository(User::class)->find($cin);

        $entityManager= $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('user');

    }

    /**
     * @Route("/user/edit/{cin}" , name="edit_user")
     * Method({"GET", "POST"})
     */
    public function editUser(Request $request ,$cin, UserPasswordEncoderInterface $encoder) {

        $user= $this->getDoctrine()->getRepository(User::class)->find($cin);

        $from =$this->createForm(RegistrationType::class, $user);

        $from->handleRequest($request);

        if ($from->isSubmitted() && $from->isValid())
        {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

              $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            return $this->redirectToRoute('test');
        }
        return $this->render('security/edit.html.twig', ['form'=>$from->createView()]);

    }

   #-------------------------------------------------------------------------------------------------------------------#


    /**
     * @Route ("/login_json/{pass}", name="login_jsonn")
     */
    public function login_mobile (Request $request, UserPasswordEncoderInterface $encoder , MailerInterface $mailer,$pass) :Response
    {

        $email="ahmedbhd97@gmail.com";

       $user=$this->getDoctrine()->getRepository(User::class)->findOneBy(array('email'=>$email));

        $datta=[];
        if($user){
            if($encoder->isPasswordValid($user,$pass)){
                $datta['email']=$email;
                $datta['password']=$pass;
                $datta['id']=$user->getId();
                $datta['cin']=$user->getCin();
                $datta['prenom']=$user->getPrenom();
                $datta['datenaissance']=$user->getDateNaissance()->format('Y-m-d');
                $datta['genre']=$user->getGenre();
                $datta['username']=$user->getUsername();
            }
        }

        return new JsonResponse($datta);
        }

    /**
     * @Route ("/inscritjson", name="inscrit_json")
     *
     */
    public function Inscrit_mobile (Request $request, UserPasswordEncoderInterface $encoder , MailerInterface $mailer) :Response
    {

      $user = new User();
      $user->setEmail($request->get('email'));
        $user->setUsername($request->get('username'));
        $user->setPrenom($request->get('prenom'));
        $hash = $encoder->encodePassword($user, $request->get('password'));
        $user->setPassword($hash);
        $user->setRoles(["ROLE_USER"]);
        $user->setDateNaissance(  new \DateTime('Y-m-d',$request->get('date_naissance')));//$request->get('date_naissance')
        $user->setGenre($request->get('genre'));
        $user->setCin((int)$request->get('cin'));
        $user->setAdresse("fhfhfh");

        $entitymanager= $this->getDoctrine()->getManager();
        $entitymanager->persist($user);
        $entitymanager->flush();

        return new JsonResponse($user);
    }




    }
