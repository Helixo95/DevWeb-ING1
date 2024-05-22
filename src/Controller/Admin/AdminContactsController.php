<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminContactsController extends AbstractController
{
    #[Route('/admin/contacts', name: 'app_admin_contacts')]
    public function index(Request $request, ContactRepository $contactRepository, UserRepository $userRepository): Response
    {
        // Exemple de pagination simple (à adapter selon vos besoins)
        $pagination = [
            'current' => 1,
            'pagesURL' => [
                ['number' => 1, 'url' => '/admin/contacts?page=1'],
                ['number' => 2, 'url' => '/admin/contacts?page=2'],
            ],
            'previousURL' => null,  // Mettre à jour avec une URL valide si nécessaire
            'nextURL' => '/admin/contacts?page=2'
        ];

        $user = $this->getUser();

        // Filtrer les utilisateurs en fonction des paramètres de filtre
        $users = $userRepository->findAll();

        // Filtrer les utilisateurs en fonction des paramètres de filtre
        $contacts = $contactRepository->findAll();
        $user = $this->getUser();

        return $this->render('admin/contacts.html.twig', [
            'controller_name' => 'AdminContactsController',
            'contacts' => $contacts,
            'pagination' => $pagination,
            'users' => $users,
            'user' => $user,
            


        ]);
    }
}
