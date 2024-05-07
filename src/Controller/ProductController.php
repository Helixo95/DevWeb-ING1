<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
//    #[Route('/product', name: 'app_product')]
//    public function index(EntityManagerInterface $entityManager): Response
//    {
//        // Récupérer tous les produits de la base de données
//        $products = $entityManager->getRepository(product::class)->findAll();
//
//        // Passer les produits au template Twig
//        return $this->render('product.html.twig', [
//            'products' => $products
//        ]);
//    }
// src/Controller/ProductController.php

    #[Route('/product/{category}', name: 'app_product_category')]
    public function category(string $category, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les produits en fonction de la catégorie

        $products = $entityManager->getRepository(Product::class)->findBy(['category' => $category]);


        $categories = ['Men', 'Women', 'Unisex'];

        // Passer les produits filtrés au template Twig
        return $this->render('product.html.twig', [
            'category' => $category,
            'categories' => $categories,
            'products' => $products
        ]);

    }
}
