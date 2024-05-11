<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\User;
use App\Form\ContactFormType;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface; //ajoutée par PHPStorm pour send, à vérifier
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /** ajouté également automatiquement
     * @throws TransportExceptionInterface
     */
    #[Route('/contact', name: 'contact.index')]

    public function index(Request $request, EntityManagerInterface $manager, MailerInterface $mailer): Response
    {
        $contact = new Contact();

        if($this->getUser()){
            //$contact->setFullName($this->getUser()->getFullName());
            $contact->setEmail($this->getUser()->getEmail());
        }

        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $manager->persist($contact);
            $manager->flush();

            $email = (new Email())
                ->from($contact->getEmail())
                ->to('contact.exotik95@gmail.com')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject($contact->getSubject())
                ->html($contact->getMessage());

            $mailer->send($email);

            $this->addFlash(
                'success',
                'Votre demande a été soumise avec succès !'
            );

            return $this->redirectToRoute('contact.index');
        }

        return $this->render('contact.html.twig', [
            //'controller_name' => 'ContactController',
            'form' => $form->createView(),

        ]);
    }


    /*public function contact(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($user);
            $entityManager->flush();

            // send email to the user
            $email = (new Email())
                ->from('contact.exotik95@gmail.com')
                /**
                ->to($form->get('email')->getData())
                ->subject('Welcome to our website')
                ->text($form->get('message')->getData());

                //->to($user->getEmail());
                ->to('ruppeaurel@cy-tech.fr')
                ->bcc('aurel.ruppe@gmail.com')
                ->subject('Hello')
                ->text('Hello');

            $mailer->send($email);

            return $this->redirectToRoute('app_login');
        }
        return $this->render('contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }*/
}
