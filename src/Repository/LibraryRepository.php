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
     * Find book by id
     * 
     * @param int $id id number of book
     * 
     * @return array<string|int, mixed> $resultSet
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


    /**
     * Deletes all books from library
     * 
     * @return array<string|int, mixed> $resultSet
     */
    public function deleteAll(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            DELETE FROM library
        ';

        $resultSet = $conn->executeQuery($sql);

        return $resultSet->fetchAllAssociative();
    }
}
