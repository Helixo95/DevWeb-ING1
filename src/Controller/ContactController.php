<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\BrandService;

class ContactController extends AbstractController
{
    private BrandService $brandService;

    public function __construct(BrandService $brandService) {
        $this->brandService = $brandService;
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(): Response {
        $brandLists = $this->brandService->getBrandLists();

        return $this->render('contact.html.twig', [
            'controller_name' => 'ContactController',
            'brandLists' => $brandLists
        ]);
    }
}