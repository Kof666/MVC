<?php

namespace App\Repository;

use App\Entity\Library;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Library>
 */
class LibraryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Library::class);
    }

/**
 * Find all book having a id specified with SQL.
 * 
 * @return [][] Returns an array of arrays (i.e. a raw data set)
 */
public function findById($id): array
{
    $conn = $this->getEntityManager()->getConnection();

    $sql = '
        SELECT * FROM library AS p
        WHERE p.id = :id
    ';

    $resultSet = $conn->executeQuery($sql, ['id' => $id]);

    return $resultSet->fetchAllAssociative();
}

public function deleteAll(): array
{
    $conn = $this->getEntityManager()->getConnection();

    $sql = '
        DELETE FROM library
    ';

    $resultSet = $conn->executeQuery($sql);

    return $resultSet->fetchAllAssociative();
}



    //    /**
    //     * @return Library[] Returns an array of Library objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Library
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
