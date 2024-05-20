<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AdminCreateController extends AbstractController
{
    #[Route('/admin/product/create', name: 'app_admin_product_create')]
    public function createProduct(EntityManagerInterface $entityManager, Request $request): Response
    {
        // Créer un nouvel objet Product
        $product = new Product();

        // Gérer la soumission du formulaire
        if ($request->isMethod('POST')) {
            $product->setName($request->request->get('name'));
            $product->setDescription($request->request->get('description'));
            $product->setPrimaryImageUrl($request->request->get('primaryImageUrl'));
            $product->setSecondaryImageUrl($request->request->get('secondaryImageUrl'));
            $product->setCategory($request->request->get('category'));
            $product->setBrand($request->request->get('brand'));
            $product->setQuantity($request->request->get('quantity'));
            $product->setOldPrice($request->request->get('oldPrice'));
            $product->setCurrentPrice($request->request->get('currentPrice'));
            $product->setRating($request->request->get('rating'));
            $product->setStatus($request->request->get('status'));

            $entityManager->persist($product);
            $entityManager->flush();

            // Rediriger ou afficher un message de succès
            return $this->redirectToRoute('app_admin_product', ['id' => $product->getId_prod()]);
        }

        return $this->render('admin/create_product.hmtl.twig', [
            'title' => 'Créer un nouveau produit',
            'action' => $this->generateUrl('app_admin_product_create'),
            'method' => 'POST',
            'product' => $product,
        ]);
    }
}
