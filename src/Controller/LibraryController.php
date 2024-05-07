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
    #[Route('/library', name: 'app_library')]
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
    
        // tell Doctrine you want to (eventually) save the Product
        // (no queries yet)
        $entityManager->persist($library);
    
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        // return new Response('Saved new product with id '.$library->getId());
        return $this->redirectToRoute('library_view');
    }

    #[Route('/library/view', name: 'library_view')]
    public function viewAllLibrary(
        LibraryRepository $libraryRepository
    ): Response {
        $library = $libraryRepository->findAll();
    
        $data = [
            'library' => $library
        ];
    
        return $this->render('library/view.html.twig', $data);
    }

    // #[Route('/product/create', name: 'product_create')]
    // public function createProduct(
    //     ManagerRegistry $doctrine
    // ): Response {
    //     $entityManager = $doctrine->getManager();
    
    //     $product = new Product();
    //     $product->setName('Keyboard_num_' . rand(1, 9));
    //     $product->setValue(rand(100, 999));
    
    //     // tell Doctrine you want to (eventually) save the Product
    //     // (no queries yet)
    //     $entityManager->persist($product);
    
    //     // actually executes the queries (i.e. the INSERT query)
    //     $entityManager->flush();
    
    //     return new Response('Saved new product with id '.$product->getId());
    // }
}
