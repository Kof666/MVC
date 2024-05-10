<?php

namespace App\Controller;

use App\Entity\Library;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LibraryRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LibraryControllerJson extends AbstractController
{
    #[Route('api/library/books', name: 'api_library_books')]
    public function showAllBooks(
        LibraryRepository $libraryRepository
    ): Response {
        $library = $libraryRepository->findAll();

        $response = $this->json($library);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('api/library/book/{isbn}', name: 'api_library_book')]
    public function findByIsbn(
        LibraryRepository $libraryRepository,
        string $isbn
    ): Response {
        $library = $libraryRepository->findByIsbn($isbn);

        return $this->json($library);
    }
}
