<?php

namespace App\Repository;

use App\Entity\RERNG;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RERNG|null find($id, $lockMode = null, $lockVersion = null)
 * @method RERNG|null findOneBy(array $criteria, array $orderBy = null)
 * @method RERNG[]    findAll()
 * @method RERNG[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RERNGRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RERNG::class);
    }

    // /**
    //  * @return RERNG[] Returns an array of RERNG objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RERNG
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
