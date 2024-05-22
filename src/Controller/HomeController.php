<?php
// src/Controller/HomeController.php
namespace App\Controller;

use App\Entity\Product;
use App\Service\BrandService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private BrandService $brandService;

    public function __construct(BrandService $brandService) {
        $this->brandService = $brandService;
    }

    #[Route('/guidlines', name: 'app_guidlines')]
    public function guidlines(): Response
    {
        $brandLists = $this->brandService->getBrandLists();

        return $this->render('terms.html.twig', [
            'brandLists' => $brandLists,
        ]);

    }

    #[Route('/home', name: 'app_home')]
    public function home(EntityManagerInterface $entityManager): Response
    {
        $brandLists = $this->brandService->getBrandLists();
        $products = $entityManager->getRepository(Product::class)->findAll();

        // Fetch the latest 5 products
        $latestProducts = $entityManager->getRepository(Product::class)->findBy([], ['creationDate' => 'DESC'], 5);


        return $this->render('home.html.twig', [
            'products' => $products,
            'brandLists' => $brandLists,
            'latest_products' => $latestProducts,

        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('security/login.html.twig', []);
    }

    #[Route('/signin', name: 'app_signin')]
    public function signin(): Response
    {
        return $this->render('register.html.twig');
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        $brandLists = $this->brandService->getBrandLists();

        return $this->render('profile.html.twig', [
            'brandLists' => $brandLists
        ]);
    }
}
