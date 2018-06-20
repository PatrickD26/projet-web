<?php

namespace App\Repository;

use App\Entity\Guid;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Guid|null find($id, $lockMode = null, $lockVersion = null)
 * @method Guid|null findOneBy(array $criteria, array $orderBy = null)
 * @method Guid[]    findAll()
 * @method Guid[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuidRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Guid::class);
    }

//    /**
//     * @return Guid[] Returns an array of Guid objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Guid
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
