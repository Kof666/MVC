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
    /**
     * Start route for library
     */
    #[Route('/library', name: 'library_index')]
    public function index(): Response
    {
        return $this->render('library/index.html.twig', [
            'controller_name' => 'LibraryController',
        ]);
    }

    /**
     * Route to reset library
     */
    #[Route('/library/reset', name: 'library_reset')]
    public function reset(
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();
        $library = $entityManager->getRepository(Library::class)->deleteAll();

        $library = new Library();
        $library->setTitle('Liftarens guide till galaxen');
        $library->setIsbn('9789132212697');
        $library->setauthor('Douglas Adams');
        $library->setpicture('https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/HappyTowelDay.jpg/300px-HappyTowelDay.jpg');
        $library->setdescription('Liftarens guide till galaxen är en historia av författaren Douglas Adams som återberättats i minst sju olika medier. Den började som en radiopjäs 1978 och har utvecklats till fem böcker (eller sex om man räknar med den sista delen skriven av Eoin Colfer), teaterpjäs, ett textbaserat äventyrsspel, en tv-serie, en seriebok och en film. Handlingen kretsar kring jordbon Arthur Dents äventyr i universum och senare även i multiversum.');

        $library2 = new Library();
        $library2->setTitle('Slumpens musik');
        $library2->setIsbn('9789155042486');
        $library2->setauthor('Paul Auster');
        $library2->setpicture('https://dez1v4fbcawql.cloudfront.net/product/3762/11811517/6342c6498c5ad.jpg');
        $library2->setdescription('Huvudpersonen är Jim Nashe som efter att han lämnats av sin hustru och fått ett arv efter sin avlidne far kör fram och tillbaka över den amerikanska kontinenten utan något mål. Han sätter sin enda tillit till slumpen och när han träffar den professionella pokerspelaren Jack Pozzi ser han en chans att utöka det kapital som efter ett år börjat sina. De utmanar de excentriska miljonärerna Flower och Stone (som blivit rika genom en lotterivinst) i ett pokerparti, men de visar sig vara skickligare än väntat och spelar av dem inte bara Nashes hela förmögenhet utan dessutom ytterligare en stor summa pengar. För att betala tillbaka spelskulden tvingas Nashe och Pozzi till det meningslösa arbetet att bygga en jättelik mur åt Stone och Flower.');

        $library3 = new Library();
        $library3->setTitle('Spök flickan');
        $library3->setIsbn('9789127054530');
        $library3->setauthor('Torey Hayden');
        $library3->setpicture('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-WLygnWdF-xdSIJMD2f3ZCn8QoMFgbi7FSAHe-CzX8A&s');
        $library3->setdescription('Boken beskriver hur Hayden i sitt arbete som speciallärare kommer i kontakt med en flicka, Jadie, som går i hennes specialklass. Jadie lider av selektiv mutism, en störning som gör att personen inte vågar prata med omgivningen. Eftersom Hayden tidigare arbetat med sådana barn lyckas hon direkt få till en kontakt till Jadie. Efterhand börjar Jadie för Hayden beskriva hur hon blir osynlig och att hon då är ett spöke, och att hon då träffar andra personer som också är spöken, därav titeln på boken. Hon börjar därefter berätta sina upplevelser med dessa andra personer, och beskrivningarna om vad som händer Jadie och hennes syskon blir mer och mer fasansfulla och oroande, med inslag av Satanism. Hayden lyckas till slut få myndigheternas uppmärksamhet och Jadie och hennes syskon blir fosterhemsplacerade. Trots en noggrann polisutredning vet ingen vad som verkligen hände.');

        $this->addFlash(
            'lib',
            'You reset the Library'
        );

        $entityManager->persist($library);
        $entityManager->persist($library2);
        $entityManager->persist($library3);
        $entityManager->flush();

        return $this->render('library/index.html.twig', [
            'controller_name' => 'LibraryController',
        ]);
    }

    /**
     * Get route to create new book in library
     */
    #[Route('/library/create', name: 'library_create_get', methods: ['GET'])]
    public function create(): Response
    {
        return $this->render('library/create.html.twig', [
            'controller_name' => 'LibraryController',
        ]);
    }

    /**
     * Post route to create book in library
     */
    #[Route('/library/create', name: 'library_create_post', methods: ['POST'])]
    public function createLibrary(
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();

        $library = new Library();
        $title = $request->request->get('title');
        $library->setTitle($request->request->get('title'));
        $library->setIsbn($request->request->get('isbn'));
        $library->setauthor($request->request->get('author'));
        $library->setpicture($request->request->get('pic'));
        $library->setdescription($request->request->get('description'));

        $entityManager->persist($library);

        $entityManager->flush();

        $this->addFlash(
            'lib',
            'Book been saved to library'
        );
        return $this->redirectToRoute('library_view_all');
    }

    /**
     * Route to view all books in library
     */
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

    /**
     * Route to view book by id
     */
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

    /**
     * Route to delete book by id
     */
    #[Route('/library/delete/{id}', name: 'library_delete_by_id')]
    public function deleteLibraryById(
        ManagerRegistry $doctrine,
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
            'lib',
            'Book is deleted'
        );

        $entityManager->remove($library);
        $entityManager->flush();

        return $this->redirectToRoute('library_view_all');
    }

    /**
     * Get route to update book by id
     */
    #[Route('/library/update/{id}', name: 'library_update_get', methods: ['GET'])]
    public function updateLibraryGet(
        LibraryRepository $libraryRepository,
        int $id,
    ): Response {
        $library = $libraryRepository->findById($id);
        $books = $libraryRepository->findById($id);

        $data = [
            'library' => $library,
            'books' => $books
        ];
        
        return $this->render('library/update_book.html.twig', $data);
        // return $this->render('library/update_book.html.twig', [
        //     'controller_name' => 'LibraryController',
        // ]);
    }

    /**
     * Post route to update book by id
     */
    #[Route('/library/update/{id}', name: 'library_update_post', methods: ['POST'])]
    public function updateLibraryPost(
        ManagerRegistry $doctrine,
        int $id,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();
        $library = $entityManager->getRepository(Library::class)->find($id);

        $library->setTitle($request->request->get('title'));
        $library->setIsbn($request->request->get('isbn'));
        $library->setauthor($request->request->get('author'));
        $library->setpicture($request->request->get('pic'));
        $library->setdescription($request->request->get('description'));

        if (!$library) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $data = [
            'library' => $library
        ];

        $library->setTitle($request->request->get('title'));
        $entityManager->flush();

        $this->addFlash(
            'lib',
            'Book has been updated'
        );

        return $this->redirectToRoute('library_view_all', $data);
    }
}
