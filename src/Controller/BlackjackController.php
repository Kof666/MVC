<?php

namespace App\Controller;

use App\Entity\Blackjack;
use App\Entity\Game;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BlackjackRepository;
use App\Repository\GameRepository;

use App\Card\Player;
use App\Card\PlayBlackjack;

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
        GameRepository $gameRepository,
        ManagerRegistry $doctrine,
        SessionInterface $session
    ): Response {
        $player = $session->get("player");
        $gameInfo = $session->get("game");
        $entityManager = $doctrine->getManager();
        $blackjack = new Blackjack();
        $blackjack->setName($player->getName());
        $blackjack->setAccount($player->getAccount());
        $blackjack->setNumOfHands($player->getNumOfHands());
        $entityManager->persist($blackjack);
        $entityManager->flush();
        $playerId = $blackjack->getId(); //to get id for table game
        $blackjack = $blackjackRepository->findAll();

        //test to see if table game worked
        $game = new Game();
        $game->setPlayerId($playerId);
        // for($i = 0; $i < count($gameInfo->bankHand()); $i++) {
        //     $game->setBankHand($gameInfo->getBankHand($i));
        // }
        //skapa en str som innehåller alla kort för att spara i db. exploe() sen när du hämtat den..
        $game->setBankHand($gameInfo->bankHand());
        $test =  $game->getBankHand();
        $entityManager->persist($game);
        $entityManager->flush();

        $data = [
            'blackjack' => $blackjack,
            'test' => $test
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

    #[Route('/proj/players/view/hand/{id}', name: 'hand_by_id')]
    public function viewHandById(
        ManagerRegistry $doctrine,

        GameRepository $gameRepository,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $hands = $entityManager->getRepository(Game::class)->findById($id);

        // $hands = $gameRepository->findById($id);
        // $bankHand =  $hands->getBankHand();

        // $entityManager->persist($hands);
        // $entityManager->flush();

        foreach($hands as $key => $value) {
            // $pieces = $value['bank_hand'];
            $pieces = explode("\"", $value['bank_hand']);
        }
        foreach($pieces as $key => $value)
        {
        if($key%2 == 0) //The key is uneven, skip
            continue;
        //do your stuff
        $cards[] = $value;
        }

        $data = [
            'hands' => $hands,
            'pieces' => $pieces,
            'cards' => $cards,
            // 'bank_hand' => $bankHand
        ];

        return $this->render('proj/view_hand.html.twig', $data);
    }

    /**
     * Route to delete player by id
     */
    #[Route('/proj/player/delete/{id}', name: 'player_delete_by_id')]
    public function deletePlayerById(
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $blackjack = $entityManager->getRepository(Blackjack::class)->find($id);

        if (!$blackjack) {
            throw $this->createNotFoundException(
                'No player found for id '.$id
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
