<?php

namespace App\Repository;

use App\Entity\Accomplishements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Accomplishements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Accomplishements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Accomplishements[]    findAll()
 * @method Accomplishements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccomplishementsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Accomplishements::class);
    }

//    /**
//     * @return Accomplishements[] Returns an array of Accomplishements objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Accomplishements
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
