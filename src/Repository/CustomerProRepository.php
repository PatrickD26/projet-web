<?php

namespace App\Repository;

use App\Entity\CustomerPro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomerPro|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerPro|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerPro[]    findAll()
 * @method CustomerPro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerProRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomerPro::class);
    }

//    /**
//     * @return CustomerPro[] Returns an array of CustomerPro objects
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
    public function findOneBySomeField($value): ?CustomerPro
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
