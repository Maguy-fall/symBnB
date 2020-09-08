<?php

namespace App\Repository;

use App\Entity\Img2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Img2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Img2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Img2[]    findAll()
 * @method Img2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Img2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Img2::class);
    }

    // /**
    //  * @return Img2[] Returns an array of Img2 objects
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
    public function findOneBySomeField($value): ?Img2
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
