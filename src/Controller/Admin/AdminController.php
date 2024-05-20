<?php

namespace App\Controller\Admin;

use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Service\BrandService;

class AdminController extends AbstractController
{
    private BrandService $brandService;
    private Security $security;

    public function __construct(BrandService $brandService, Security $security) {
        $this->brandService = $brandService;
        $this->security = $security;
    }

    #[Route('/admin', name: 'admin_dashboard')]
    public function dashboard(UserRepository $userRepository, ProductRepository $productRepository): Response
    {
        $brandLists = $this->brandService->getBrandLists();

        $users = $userRepository->findAll();
        $products = $productRepository->findAll();
        $counts = [
            'users' => count($users),
            'products' => count($products),
        ];

        // Get the currently logged-in user
        $user = $this->security->getUser();


        // Debugging: Check if user is null
        if (!$user) {
            throw $this->createAccessDeniedException('You are not logged in.');
        }


        return $this->render('admin/dashboard.html.twig', [
            'users' => $users,
            'products' => $products,
            'counts' => $counts,
            'user' => $user, // Pass the authenticated user to the template
          //  'product'=>$product,
        ]);
    }
}
