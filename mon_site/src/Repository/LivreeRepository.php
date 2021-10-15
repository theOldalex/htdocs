<?php

namespace App\Repository;

use App\Entity\Livree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Livree|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livree|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livree[]    findAll()
 * @method Livree[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivreeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livree::class);
    }

    // /**
    //  * @return Livree[] Returns an array of Livree objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Livree
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
