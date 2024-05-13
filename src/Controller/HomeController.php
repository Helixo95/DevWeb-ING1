<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/guidlines', name: 'app_guidlines')]
    public function  guidlines(): Response
    {
        return $this->render('terms.html.twig', []);
    }

    #[Route('/home', name: 'app_home')]
    public function  home(): Response
    {
        return $this->render('home.html.twig', []);
    }
    
    #[Route('/login', name: 'app_login')]
    public function  login(): Response
    {
        return $this->render('security/login.html.twig', []);
    }

    #[Route('/signin', name: 'app_signin')]
    public function signin(): Response
    {
        return $this->render('signin.html.twig');
    }

    #[Route('/modif_profile', name: 'app_modif_profile')]
    public function modif_profile(): Response
    {
        return $this->render('modif_profile.html.twig');
    }
    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('profile.html.twig');
    }
}

