<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Service\BrandService;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private BrandService $brandService;

    public function __construct(BrandService $brandService) {
        $this->brandService = $brandService;
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $manager, MailerInterface $mailer): Response
    {
        $contact = new Contact();

        $brandLists = $this->brandService->getBrandLists();

        if($this->getUser()){
            $contact->setEmail($this->getUser()->getEmail())
            ->setGenre($this->getUser()->getGenre())
            ->setFirstName($this->getUser()->getPrenom())
            ->setLastName($this->getUser()->getNom())
            ;}

        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $manager->persist($contact);
            $manager->flush();

            /*$email = (new Email())
                ->from($contact->getEmail())
                ->to('contact.exotik95@gmail.com')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject($contact->getSubject())
                ->html($contact->getMessage());

            $mailer->send($email);*/

            $this->addFlash(
                'form-message-success',
                'Votre demande a été soumise avec succès !'
            );

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact.html.twig', [
            //'controller_name' => 'ContactController',
            'contactForm' => $form->createView(),
            'brandLists' => $brandLists
        ]);
    }
}