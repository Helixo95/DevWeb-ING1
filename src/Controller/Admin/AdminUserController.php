<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminUserController extends AbstractController
{
    #[Route('/admin/user/{id}', name: 'app_admin_user')]
    public function index(int $id, UserRepository $userRepository, Security $security): Response
    {
        // Get the currently logged-in user
        $currentUser = $security->getUser();

        // Check if the user is logged in
        if (!$currentUser instanceof UserInterface) {
            throw $this->createAccessDeniedException('You are not logged in.');
        }

        // Retrieve the user by ID
        $user = $userRepository->find($id);

        // Check if the user exists
        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }

        return $this->render('admin/user_account.html.twig', [
            'controller_name' => 'AdminUserController',
            'user' => $user,
        ]);
    }

    #[Route('/admin/user/change-role/{id}', name: 'change_role', methods: ['POST'])]
    public function changeRole(int $id, Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $newRole = $data['role'];

        // Retrieve the user by ID
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['success' => false, 'message' => 'User not found.'], 404);
        }

        if ($newRole === 'admin') {
            $user->setRoles(['admin']);
        } elseif ($newRole === 'user') {
            $user->setRoles(['user']);
        }

        $entityManager->flush();

        return new JsonResponse(['success' => true]);
    }


    #[Route('/admin/user/change-status/{id}', name: 'change_status', methods: ['POST'])]
    public function changeStatus(int $id, Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $newStatus = $data['status'];

        // Retrieve the user by ID
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['success' => false, 'message' => 'User not found.'], 404);
        }

        $user->setStatus($newStatus);

        $entityManager->flush();

        return new JsonResponse(['success' => true]);
    }
}
