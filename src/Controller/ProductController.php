<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{category}/{brand?}', name: 'app_product_category_brand')]
    public function categoryBrand(string $category, ?string $brand, EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(product::class)->findAll();
        $repository = $entityManager->getRepository(Product::class);
        $brands = $repository->findBrandsByCategory($category);

        $categories = ['Men', 'Women', 'Unisex']; // Les catégories disponibles

        // Récupérer les marques pour chaque catégorie à partir de la base de données
        $brandLists = [];
        foreach ($categories as $cat) {
            $brandLists[$cat] = $entityManager->getRepository(Product::class)->findBrandsByCategory($cat);
        }

        $products = [];
        if ($brand) {
            $products = $entityManager->getRepository(Product::class)->findBy([
                'category' => $category,
                'brand' => str_replace('-', ' ', $brand)  // Convertir les tirets en espaces
            ]);
        } else {
            $products = $entityManager->getRepository(Product::class)->findBy(['category' => $category]);
        }

        return $this->render('product.html.twig', [
            'category' => $category,
            'brand' => $brand,
            'categories' => $categories,
            'brandLists' => $brandLists,
            'products' => $products
        ]);
    }



}
