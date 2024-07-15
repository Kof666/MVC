<?php

namespace App\Repository;

use App\Entity\Blackjack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Blackjack>
 */
class BlackjackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blackjack::class);
    }

    /**
     * Find player by id
     *
     * @param int $id id number of book
     *
     * @return array<string|int, mixed> $resultSet
     */
    public function findById($id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM blackjack AS p
            WHERE p.id = :id
        ';

        $resultSet = $conn->executeQuery($sql, ['id' => $id]);

        return $resultSet->fetchAllAssociative();
    }

    /**
     * Find player by name
     *
     * @param string $name name of player
     *
     * @return array<string|int, mixed> $resultSet
     */
    public function findByName($name): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM blackjack AS p
            WHERE p.name = :name
        ';

        $resultSet = $conn->executeQuery($sql, ['name' => $name]);

        return $resultSet->fetchAllAssociative();
    }

    /**
     * Deletes all players from blackjack
     *
     * @return array<string|int, mixed> $resultSet
     */
    public function deleteAll(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            DELETE FROM blackjack
        ';

        $resultSet = $conn->executeQuery($sql);

        return $resultSet->fetchAllAssociative();
    }

    //    /**
    //     * @return Blackjack[] Returns an array of Blackjack objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Blackjack
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
