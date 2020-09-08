<?php

namespace App\Repository;

use App\Entity\Img3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Img3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Img3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Img3[]    findAll()
 * @method Img3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Img3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Img3::class);
    }

    // /**
    //  * @return Img3[] Returns an array of Img3 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Img3
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
