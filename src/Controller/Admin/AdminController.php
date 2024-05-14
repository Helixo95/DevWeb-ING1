<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Product;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_dashboard')]
    public function dashboard(UserRepository $userRepository, ProductRepository $productRepository): Response
    {
        $users = $userRepository->findAll();
        $products = $productRepository->findAll();
        $counts = [
            'users' => count($users),
            'products' => count($products),
        ];

        return $this->render('admin/dashboard.html.twig', [
            'users' => $users,
            'products' => $products,
            'counts' => $counts,
        ]);
    }
}
