<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        //get cart from session
        $cart = $session->get('cart', []);
        $productCart = [];
        //retrieve all product data from database. and calculate total cost
        foreach ($cart as $id => $qty) {
            $productCart[] = [
                'product' => $entityManager->getRepository(Product::class)->find($id),
                'quantity' => $qty
            ];

        }
        $total = 0;
        foreach ($productCart as $items){
            $total_item= $items['product']->getCurrentPrice() * $items['quantity'];
            $total +=$total_item;
        }


        // Passer le cart au template Twig
        return $this->render('cart.html.twig', [
                'items' => $productCart,
                'total' => $total
            ]
        );
    }
    #[Route('/cart/add/{id}', name: 'cart_Add')]
    public function cart_Add($id, Request $request, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        $session = $request->getSession();
        $cart = $session->get('cart');
        if($product->getQuantity() >= $cart[$id]){
            $cart[$id] += 1;
            $session->set('cart', $cart);
        }

        return $this->redirectToRoute("app_cart");
    }
    #[Route('/cart/min/{id}', name: 'cart_Min')]
    public function cart_Min($id, Request $request, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $session = $request->getSession();
        $cart = $session->get('cart');
        if($cart[$id]>0){
            $cart[$id] -= 1;
        }
        if($cart[$id]==0){
            unset($cart[$id]);
        }
        $session->set('cart', $cart);

        return $this->redirectToRoute("app_cart");
    }
    #[Route('/cart/remove/{id}', name: 'cart_remove')]
    public function cart_remove($id, Request $request, EntityManagerInterface $entityManager): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $session = $request->getSession();
        $cart = $session->get('cart',[]);
        if(!empty($cart[$id])){

            unset($cart[$id]);
            $session->set('cart', $cart);
        }

        return $this->redirectToRoute("app_cart");
    }
    #[Route('/cart/register', name: 'cart_register')]
    public function cart_register(Request $request,EntityManagerInterface $entityManager, MailerInterface $mailer){
        $session = $request->getSession();
        $cart = $session->get('cart',[]);
        foreach ($cart as $id => $qty) {
                $product = $entityManager->getRepository(Product::class)->find($id);
                $product->setQuantity($product->getQuantity()-$qty);
        }
        $session->remove('cart');
        //confirm message
        $this->AddFlash(
            'success',
            'merci pour vos achat!'
        );

        $email = (new Email())
            ->from('hello@example.com')
            ->to('david.mitsakis@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        return $this->redirectToRoute("app_cart");

    }
}
