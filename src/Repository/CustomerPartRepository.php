<?php

namespace App\Repository;

use App\Entity\CustomerPart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomerPart|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerPart|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerPart[]    findAll()
 * @method CustomerPart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerPartRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomerPart::class);
    }

//    /**
//     * @return CustomerPart[] Returns an array of CustomerPart objects
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
    public function findOneBySomeField($value): ?CustomerPart
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
