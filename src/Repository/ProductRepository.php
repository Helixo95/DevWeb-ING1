<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }
    public function findBrandsByCategory($category)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('DISTINCT p.brand')
            ->where('p.category = :category')
            ->setParameter('category', $category)
            ->orderBy('p.brand', 'ASC');

        return array_map(function ($entry) {
            return $entry['brand'];
        }, $qb->getQuery()->getScalarResult());
    }


}
