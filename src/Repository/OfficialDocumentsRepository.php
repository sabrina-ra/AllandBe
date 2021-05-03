<?php

namespace App\Repository;

use App\Entity\OfficialDocuments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OfficialDocuments|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfficialDocuments|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfficialDocuments[]    findAll()
 * @method OfficialDocuments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfficialDocumentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OfficialDocuments::class);
    }

    // /**
    //  * @return OfficialDocuments[] Returns an array of OfficialDocuments objects
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
    public function findOneBySomeField($value): ?OfficialDocuments
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
