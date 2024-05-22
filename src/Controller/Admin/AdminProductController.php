<?php
namespace App\Controller\Admin;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AdminProductController extends AbstractController
{
    #[Route('/admin/product/{id}', name: 'app_admin_product', requirements: ['id' => '\d+'])]
    public function editProduct(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        // Récupérer le produit par son id
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Le produit n\'existe pas.');
        }

        // Gérer la soumission du formulaire
        if ($request->isMethod('POST')) {
            // Mettre à jour les propriétés du produit
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

            $entityManager->flush();

            // Rediriger ou afficher un message de succès
            return $this->redirectToRoute('app_admin_product', ['id' => $product->getId_prod()]);
        }

        return $this->render('admin/product.html.twig', [
            'title' => 'Modifier le produit',
            'action' => $this->generateUrl('app_admin_product', ['id' => $product->getId_prod()]),
            'method' => 'POST',
            'product' => $product,
        ]);
    }

    #[Route('/admin/product/delete/{id}', name: 'app_admin_product_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function deleteProduct(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        // Récupérer le produit par son id
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Le produit n\'existe pas.');
        }

        if ($this->isCsrfTokenValid('delete'.$product->getId_prod(), $request->request->get('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();

            $this->addFlash('success', 'Product deleted successfully');
        } else {
            $this->addFlash('error', 'Invalid CSRF token');
        }

        return $this->redirectToRoute('app_admin_products');
    }
}
