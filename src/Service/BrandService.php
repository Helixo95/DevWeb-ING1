<?php


namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Product;

class BrandService {
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function getBrandLists(): array {
        $categories = ['Men', 'Women', 'Unisex'];
        $brandLists = [];
        foreach ($categories as $category) {
            $brandLists[$category] = $this->entityManager->getRepository(Product::class)->findBrandsByCategory($category);
        }
        return $brandLists;
    }
}
