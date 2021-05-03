<?php

namespace App\Repository;

use App\Entity\OfficialDocs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OfficialDocs|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfficialDocs|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfficialDocs[]    findAll()
 * @method OfficialDocs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfficialDocsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OfficialDocs::class);
    }

    // /**
    //  * @return OfficialDocs[] Returns an array of OfficialDocs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OfficialDocs
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
