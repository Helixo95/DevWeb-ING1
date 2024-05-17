<?php

namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminUsersController extends AbstractController
{
    #[Route('/admin/users', name: 'app_admin_users')]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        // Exemple de pagination simple (à adapter selon vos besoins)
        $pagination = [
            'current' => 1,
            'pagesURL' => [
                ['number' => 1, 'url' => '/admin/users?page=1'],
                ['number' => 2, 'url' => '/admin/users?page=2'],
            ],
            'previousURL' => null,  // Mettre à jour avec une URL valide si nécessaire
            'nextURL' => '/admin/users?page=2'
        ];
        // Filtrer les utilisateurs en fonction des paramètres de filtre
        $users = $userRepository->findAll();

        return $this->render('admin/users.html.twig', [
            'controller_name' => 'AdminUsersController',
            'users' => $users,
            'pagination' => $pagination,

        ]);
    }
}
