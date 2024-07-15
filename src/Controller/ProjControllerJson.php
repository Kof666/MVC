<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;
use App\Card\CardGraphic;
use App\Card\PlayBlackjack;
use App\Card\Player;

use App\Entity\Blackjack;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BlackjackRepository;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProjControllerJson extends AbstractController
{
    /**
     * route to view the cards left in the deck
     */
    #[Route("/proj/api/deck", name: "deck")]
    public function apiProjDeck(
        SessionInterface $session
    ): Response {

        $data = [];
        $game = $session->get("game");
        if($game) {
            $deck = $game->getApiDeck();

            $data = [
                "deck" => $deck
            ];
        }
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    /**
     * route to view the hands of the game
     */
    #[Route("/proj/api/hands", name: "hands")]
    public function apiProjHands(
        SessionInterface $session
    ): Response {

        $data = [];
        $game = $session->get("game");
        if($game) {
            $bankHand = $game->bankHand();
            $playerHand = $game->playerHand();

            $data = [
                "bankHand" => $bankHand,
                "playerHand" => $playerHand
            ];
        }
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('/proj/api/players', name: 'players')]
    public function showAllPlayers(
        BlackjackRepository $blackjackRepository
    ): Response {
        $blackjack = $blackjackRepository->findAll();

        $response = $this->json($blackjack);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    /**
     * Route for draw
     */
    #[Route("/proj/api/deck/draw", name: "proj_deck_draw_get", methods: ['GET'])]
    public function projDrawGet(
        // Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");

        $bankHand = $game->bankHand();

        $data = [
            "bank_hand" => $bankHand
        ];


        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    /**
     * Route for draw post
     */
    #[Route("/proj/api/deck/draw", name: "proj_deck_draw_post", methods: ['POST'])]
    public function projDraw(
        // Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");

        $bankHand = $game->bankHand();
        $game->dealBankCard();

        $session->set("bank_hand", $bankHand);

        $data = [
            "bank_hand" => $bankHand
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('/proj/api/find/Player', name: 'find_player_get')]
    public function findByNameGet(
        Request $request,
        BlackjackRepository $blackjackRepository,
    ): Response {
        $name = $request->request->get('name');
        $blackjack = $blackjackRepository->findByName($name);

        return $this->json($blackjack);
    }

    #[Route('/proj/api/find/player', name: 'find_player_post')]
    public function findByNamePost(
        Request $request,
        BlackjackRepository $blackjackRepository,
    ): Response {
        $name = $request->request->get('name');

        $blackjack = $blackjackRepository->findByName($name);

        if(!$blackjack) {
            $blackjack = "No player found in database";
        }
        return $this->json($blackjack);
    }
}
