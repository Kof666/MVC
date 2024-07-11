<?php

namespace App\Controller;

use App\Entity\Blackjack;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BlackjackRepository;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlackjackController extends AbstractController
{
    #[Route('/blackjack', name: 'app_blackjack')]
    public function index(): Response
    {
        return $this->render('blackjack/index.html.twig', [
            'controller_name' => 'BlackjackController',
        ]);
    }

    /**
     * Create
     */
    #[Route('/blackjack/create', name: 'blackjack_create')]
    public function createBlackjack(
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();

        $blackjack1 = new Blackjack();
        $blackjack1->setName('default player 1');
        $blackjack1->setAccount(1000);
        $blackjack1->setNumOfHands(3);

        // $blackjack2 = new Blackjack();
        // $blackjack2->setName('default player 2');
        // $blackjack2->setAccount(900);
        // $blackjack2->setNumOfHands(2);

        // $blackjack3 = new Blackjack();
        // $blackjack3->setName('default player 3');
        // $blackjack3->setAccount(800);
        // $blackjack3->setNumOfHands(1);


        // tell Doctrine you want to (eventually) save the Product
        // (no queries yet)
        $entityManager->persist($blackjack1);
        // $entityManager->persist($blackjack2);
        // $entityManager->persist($blackjack3);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$blackjack1->getId());
    }

    /**
     * show
     */
    #[Route('/blackjack/show', name: 'blackjack_show_all')]
    public function showAllPlayer(
        BlackjackRepository $blackjackRepository
    ): Response {
        $blackjack = $blackjackRepository
            ->findAll();

            $response = $this->json($blackjack);
            $response->setEncodingOptions(
                $response->getEncodingOptions() | JSON_PRETTY_PRINT
            );
            return $response;
    }

    /**
     * Route to view all players
     */
    #[Route('/proj/players/view', name: 'players_view_all')]
    public function viewAllPlayers(
        BlackjackRepository $blackjackRepository
    ): Response {
        $blackjack = $blackjackRepository->findAll();

        $data = [
            'blackjack' => $blackjack
        ];

        return $this->render('proj/view_all.html.twig', $data);
    }
}
