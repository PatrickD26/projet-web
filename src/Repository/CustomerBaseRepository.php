<?php

namespace App\Repository;

use App\Entity\CustomerBase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomerBase|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerBase|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerBase[]    findAll()
 * @method CustomerBase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerBaseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomerBase::class);
    }

//    /**
//     * @return CustomerBase[] Returns an array of CustomerBase objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomerBase
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
