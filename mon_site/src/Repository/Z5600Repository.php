<?php

namespace App\Repository;

use App\Entity\Z5600;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Z5600|null find($id, $lockMode = null, $lockVersion = null)
 * @method Z5600|null findOneBy(array $criteria, array $orderBy = null)
 * @method Z5600[]    findAll()
 * @method Z5600[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Z5600Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Z5600::class);
    }

    /**Problème avec le signe different de*/
    

    public function search($mots){
        $query = $this->createQueryBuilder('a');
        $query->where('a.active = 1');
        if($mots != null){
            $query->andWhere('MATCH_AGAINST(a.title, a.content) AGAINST (:mots boolean)>0')
            ->setParameter('mots', $mots);
        }
    
        return $query -> getQuery() -> getResult();
        
    }

    // /**
    //  * @return Z5600[] Returns an array of Z5600 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Z5600
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    */
}

