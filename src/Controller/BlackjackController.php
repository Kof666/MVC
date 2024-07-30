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

        $game = new Game();
        $game->setPlayerId($playerId);

        $game->setBankHand($gameInfo->bankHand());
        $bankHand =  $game->getBankHand();

        $hands = $gameInfo->playerHand();
        $game->setPlayerHandOne($hands[0]);
        if(isset($hands[1])) {
            $game->setPlayerHandTwo($hands[1]);
        }
        if(isset($hands[2])) {
            $game->setPlayerHandThree($hands[2]);
        }

        $entityManager->persist($game);
        $entityManager->flush();

        $data = [
            'blackjack' => $blackjack,
            'bank_hand' => $bankHand,
            'hands' => $hands,
            'game_info' => $gameInfo
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
     * View hand by id
     */
    #[Route('/proj/players/view/hand/{id}', name: 'hand_by_id')]
    public function viewHandById(
        ManagerRegistry $doctrine,
        GameRepository $gameRepository,
        int $id
    ): Response {
        $pieces = array();
        $pieces2 = array();
        $pieces3 = array();
        $pieces4 = array();
        $bankHand = array();

        $entityManager = $doctrine->getManager();
        /** @phpstan-ignore-next-line */
        $hands = $entityManager->getRepository(Game::class)->findById($id);

        foreach($hands as $key => $value) {
            $pieces = explode("\"", $value['bank_hand']);
            $pieces2 = explode("\"", $value['player_hand_one']);
            $pieces3 = explode("\"", $value['player_hand_two']);
            $pieces4 = explode("\"", $value['player_hand_three']);
        }
        foreach($pieces as $key => $value) {
            if($key % 2 == 0) {
                continue;
            }
            $bankHand[] = $value;
        }

        foreach($pieces2 as $key => $value) {
            if($key % 2 == 0) {
                continue;
            }
            $playerHandOne[] = $value;
        }

        foreach($pieces3 as $key => $value) {
            if($key % 2 == 0) {
                continue;
            }
            $playerHandTwo[] = $value;
        }

        foreach($pieces4 as $key => $value) {
            if($key % 2 == 0) {
                continue;
            }
            $playerHandThree[] = $value;
        }

        /** @phpstan-ignore-next-line */
        $playerHands = array($playerHandOne);
        if(isset($playerHandTwo)) {
            array_push($playerHands, $playerHandTwo);
        }
        if(isset($playerHandThree)) {
            array_push($playerHands, $playerHandThree);
        }

        $data = [
            'hands' => $hands,
            'pieces' => $pieces,
            'bank_hand' => $bankHand,
            'player_hands' => $playerHands,

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
        /** @phpstan-ignore-next-line */
        $playerId = $blackjack->getID();

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

        $entityManager = $doctrine->getManager();
        /** @phpstan-ignore-next-line */
        $game = $entityManager->getRepository(Game::class)->findById($playerId);

        foreach($game as $key => $value) {
            $gameId = $value['id'];
        }

        /** @phpstan-ignore-next-line */
        $game = $entityManager->getRepository(Game::class)->find($gameId);
        /** @phpstan-ignore-next-line */
        $entityManager->remove($game);
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
        $playerId = 0;

        $entityManager = $doctrine->getManager();
        /** @phpstan-ignore-next-line */
        $entityManager->getRepository(Blackjack::class)->deleteAll();
        /** @phpstan-ignore-next-line */
        $entityManager->getRepository(Game::class)->deleteAll();

        for($i = 1; $i < 4; $i++) {
            $blackjack1 = new Blackjack();
            $blackjack1->setName("Default Player $i");
            $blackjack1->setAccount(1000);
            $blackjack1->setNumOfHands($i);

            $entityManager->persist($blackjack1);
            $entityManager->flush();

            /** @phpstan-ignore-next-line */
            $blackjack = $entityManager->getRepository(Blackjack::class)->findByName("Default Player $i");

            foreach($blackjack as $key => $value) {
                $playerId = $value['id'];
            }

            $player = new PlayBlackjack();
            /** @phpstan-ignore-next-line */
            $player->dealFirstPlayerCard($blackjack1->getNumOfHands());
            /** @phpstan-ignore-next-line */
            $player->dealFirstBankCard($blackjack1->getNumOfHands());
            /** @phpstan-ignore-next-line */
            $player->dealSecondPlayerCard($blackjack1->getNumOfHands());
            /** @phpstan-ignore-next-line */
            $player->dealSecondBankCard($blackjack1->getNumOfHands());

            $game1 = new Game();
            $game1->setPlayerId($playerId);
            $game1->setBankHand($player->bankHand());

            $hands = $player->playerHand();
            $game1->setPlayerHandOne($hands[0]);
            if(isset($hands[1])) {
                $game1->setPlayerHandTwo($hands[1]);
            }
            if(isset($hands[2])) {
                $game1->setPlayerHandThree($hands[2]);
            }



            $entityManager->persist($game1);
            $entityManager->flush();
        }

        $this->addFlash(
            'notice',
            'You reseted the database'
        );

        return $this->redirectToRoute('players_view_all');
    }
}
