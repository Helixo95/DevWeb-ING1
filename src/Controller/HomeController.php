<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/login', name: 'app_login')]
    public function  login(): Response
    {
        return $this->render('home/login.html.twig', []);
    }

    #[Route('/signin', name: 'app_signin')]
    public function signin(): Response
    {
        return $this->render('home/signin.html.twig');
    }
}
