<?php

namespace App\Controller;

use App\Entity\Blackjack;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BlackjackRepository;

use App\Card\Player;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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
        BlackjackRepository $blackjackRepository,
        ManagerRegistry $doctrine,
        SessionInterface $session
    ): Response {
        $player = $session->get("player");
        $entityManager = $doctrine->getManager();
        $blackjack = new Blackjack();
        $blackjack->setName($player->getName());
        $blackjack->setAccount($player->getAccount());
        $blackjack->setNumOfHands($player->getNumOfHands());
        $entityManager->persist($blackjack);
        $entityManager->flush();

        $blackjack = $blackjackRepository->findAll();

        $data = [
            'blackjack' => $blackjack
        ];

        return $this->render('proj/view_all.html.twig', $data);
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

    /**
     * Route to delete player by id
     */
    #[Route('/proj/player/delete/{id}', name: 'player_delete_by_id')]
    public function deleteLibraryById(
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $blackjack = $entityManager->getRepository(Blackjack::class)->find($id);

        if (!$blackjack) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $this->addFlash(
            'notice',
            'Player deleted'
        );

        $entityManager->remove($blackjack);
        $entityManager->flush();

        return $this->redirectToRoute('players_view_all');
    }

    /**
     * route to load player by id
     */
    #[Route('/proj/laod/{id}', name: 'load')]
    public function load(
        ManagerRegistry $doctrine,
        int $id,
        SessionInterface $session,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();
        $blackjack = $entityManager->getRepository(Blackjack::class)->find($id);

        if (!$blackjack) {
            throw $this->createNotFoundException(
                'No player for id '.$id
            );
        }

        // $session->get("player", $player);
        $player = new Player($blackjack->getName(), $blackjack->getAccount(), $blackjack->getNumOfHands());

        $session->set("player", $player);

        $data = [
            'player' => $player
        ];

        $entityManager->flush();

        $this->addFlash(
            'lib',
            'player has been uploaded'
        );

        return $this->redirectToRoute('bet', $data);
    }

    /**
     * Route to reset library
     */
    #[Route('/proj/player/reset', name: 'reset')]
    public function reset(
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();
        /** @phpstan-ignore-next-line */
        $entityManager->getRepository(Blackjack::class)->deleteAll();

        $blackjack1 = new Blackjack();
        $blackjack1->setName('Default Player 1');
        $blackjack1->setAccount(1000);
        $blackjack1->setNumOfHands(1);

        $blackjack2 = new Blackjack();
        $blackjack2->setName('Default Player 2');
        $blackjack2->setAccount(900);
        $blackjack2->setNumOfHands(2);

        $blackjack3 = new Blackjack();
        $blackjack3->setName('Default Player 3');
        $blackjack3->setAccount(800);
        $blackjack3->setNumOfHands(3);

        $this->addFlash(
            'notice',
            'You reseted the database'
        );

        $entityManager->persist($blackjack1);
        $entityManager->persist($blackjack2);
        $entityManager->persist($blackjack3);
        $entityManager->flush();

        return $this->redirectToRoute('players_view_all');
    }
}
