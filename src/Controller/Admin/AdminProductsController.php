<?php

namespace App\Controller\Admin;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminProductsController extends AbstractController
{
    #[Route('/admin/products', name: 'app_admin_products')]
    public function index(ProductRepository $productRepository): Response
    {
        // Récupérer tous les produits
        $products = $productRepository->findAll();

        // Exemple de pagination simple (à adapter selon vos besoins)


        return $this->render('admin/products.html.twig', [
            'controller_name' => 'AdminProductsController',
            'products' => $products,
        ]);
    }

}
