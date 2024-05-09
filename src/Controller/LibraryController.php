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


class LibraryController extends AbstractController
{
    #[Route('/library', name: 'library_index')]
    public function index(): Response
    {
        return $this->render('library/index.html.twig', [
            'controller_name' => 'LibraryController',
        ]);
    }

    #[Route('/library/create', name: 'library_create_get', methods: ['GET'])]
    public function create(): Response
    {
        return $this->render('library/create.html.twig', [
            'controller_name' => 'LibraryController',
        ]);
    }

    #[Route('/library/create', name: 'library_create_post', methods: ['POST'])]
    public function createLibrary(
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();
    
        $library = new Library();
        $library->setTitle($request->request->get('title'));
        $library->setIsbn($request->request->get('isbn'));
        $library->setauthor($request->request->get('author'));
        $library->setpicture($request->request->get('pic'));
        $library->setdescription($request->request->get('description'));
    
        // tell Doctrine you want to (eventually) save the Product
        // (no queries yet)
        $entityManager->persist($library);
    
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        $this->addFlash(
            'notice',
            'Book been saved to library'
        );
        // return new Response('Saved new product with id '.$library->getId());
        return $this->redirectToRoute('library_index');
    }

    #[Route('/library/view', name: 'library_view_all')]
    public function viewAllLibrary(
        LibraryRepository $libraryRepository
    ): Response {
        $library = $libraryRepository->findAll();
    
        $data = [
            'library' => $library
        ];
    
        return $this->render('library/view_all.html.twig', $data);
    }

    #[Route('/library/view/{id}', name: 'library_by_id')]
    public function viewLibraryById(
        LibraryRepository $libraryRepository,
        int $id
    ): Response {
        $library = $libraryRepository->findById($id);
    
        $data = [
            'library' => $library
        ];
    
        return $this->render('library/view_book.html.twig', $data);
    }

    #[Route('/library/delete/{id}', name: 'library_delete_by_id')]
    public function deleteLibraryById(
        ManagerRegistry $doctrine,
        LibraryRepository $libraryRepository,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $library = $entityManager->getRepository(Library::class)->find($id);
    
        if (!$library) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $this->addFlash(
            'notice',
            'Book is deleted'
        );
    
        $entityManager->remove($library);
        $entityManager->flush();
    
        return $this->redirectToRoute('library_view_all');
    }

    // #[Route('/product/delete/{id}', name: 'product_delete_by_id')]
    // public function deleteProductById(
    //     ManagerRegistry $doctrine,
    //     int $id
    // ): Response {
    //     $entityManager = $doctrine->getManager();
    //     $product = $entityManager->getRepository(Product::class)->find($id);
    
    //     if (!$product) {
    //         throw $this->createNotFoundException(
    //             'No product found for id '.$id
    //         );
    //     }
    
    //     $entityManager->remove($product);
    //     $entityManager->flush();
    
    //     return $this->redirectToRoute('product_show_all');
    // }
}
