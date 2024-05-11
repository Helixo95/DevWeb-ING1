<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{category}', name: 'app_product_category_brand')]
    public function categoryBrand(string $category, /*?string $brand ,*/ EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Product::class);
        //$brands = $repository->findBrandsByCategory($category);

        $categories = ['Men', 'Women', 'Unisex']; // Les catégories disponibles

        // Récupérer les marques pour chaque catégorie à partir de la base de données
        $brandLists = [];
        //foreach ($categories as $cat) {
            //$brandLists[$cat] = $entityManager->getRepository(Product::class)->findBrandsByCategory($cat);
        //}

        $products = [];
        /*if ($brand) {
            $products = $entityManager->getRepository(Product::class)->findBy([
                'category' => $category,
                'brand' => str_replace('-', ' ', $brand)  // Convertir les tirets en espaces
            ]);
        } else {*/
            $products = $entityManager->getRepository(Product::class)->findBy(['category' => $category]);
        //}

        return $this->render('product.html.twig', [
            'category' => $category,
            //'brand' => $brand,
            'categories' => $categories,
            'brandLists' => $brandLists,
            'products' => $products
        ]);
    }
    //add One product to cart
    #[Route('/product/add/{id}', name: 'add_cart')]
    public function add_cart($id, Request $request, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        $session = $request->getSession();
        $cart = $session->get('cart', []);
        if(empty($cart[$id]) or $product->getQuantity() >= $cart[$id]){

        if(!empty($cart[$id])){
            $cart[$id]++;
        }
        else {
            $cart[$id] = 1;
        }
        $session->set('cart', $cart);
    }


        return $this->redirectToRoute("app_product_category_brand", [
            'category' => $product->getCategory()
        ]);


    }
    //add multiple product to cart.
    #[Route('/product/add2/{id}', name: 'add_cart2', methods:['POST'])]
    public function add_cart2($id, Request $request,EntityManagerInterface $entityManager){
        {
            $product = $entityManager->getRepository(Product::class)->find($id);
            $qty=$request->get('qty');
            $session = $request->getSession();
            $cart = $session->get('cart', []);
            if((empty(($cart[$id])) and $product->getQuantity() >= $qty)or $product->getQuantity() >= $qty+$cart[$id]){


                if(!empty($cart[$id])){
                    $cart[$id]+=$qty;
                }
                else {
                    $cart[$id] =$qty;
                }
                $session->set('cart', $cart);
            }


            return $this->redirectToRoute("app_product_category_brand", [
                'category' => $product->getCategory()
            ]);


        }
    }





}
