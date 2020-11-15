<?php

namespace App\Repository;

use App\Entity\Renumeration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Renumeration|null find($id, $lockMode = null, $lockVersion = null)
 * @method Renumeration|null findOneBy(array $criteria, array $orderBy = null)
 * @method Renumeration[]    findAll()
 * @method Renumeration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RenumerationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Renumeration::class);
    }

    // /**
    //  * @return Renumeration[] Returns an array of Renumeration objects
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
    public function findOneBySomeField($value): ?Renumeration
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
