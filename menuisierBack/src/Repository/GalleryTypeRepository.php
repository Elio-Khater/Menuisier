<?php

namespace App\Repository;

use App\Entity\GalleryType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GalleryType|null find($id, $lockMode = null, $lockVersion = null)
 * @method GalleryType|null findOneBy(array $criteria, array $orderBy = null)
 * @method GalleryType[]    findAll()
 * @method GalleryType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GalleryTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GalleryType::class);
    }

//    /**
//     * @return GalleryType[] Returns an array of GalleryType objects
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
    public function findOneBySomeField($value): ?GalleryType
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
