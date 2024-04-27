<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;
use App\Card\CardHand;
use App\Card\CardGraphic;
use App\Card\Play21;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Card21Controller extends AbstractController
{
    /**
     * the landing route for cards
     */
    #[Route("/game", name: "card_21")]
    public function home21(
        SessionInterface $session
    ): Response {
        $game = new Play21();
        $session->set("game", $game);

        $data = [
            "game" => $game
        ];

        return $this->render('card21/home21.html.twig', $data);
    }

    /**
     * GET Route for player hand
     */
    #[Route("/game/21/player", name: "start_21_get", methods: ['GET'])]
    public function playerHand21Get(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $deck = $game->getDeck();
        $playerHand = $game->playerHand();
        $bank = $game->getBank();
        $player = $game->getPlayer();
        $rounds = $game->getRounds();

        $session->set("deck", $deck);

        $data = [
            "game" => $game,
            "deck" => $deck,
            "playerHand" => $playerHand,
            "bank" => $bank,
            "player" => $player,
            "rounds" => $rounds,
        ];
        return $this->render('card21/start_21.html.twig', $data);
    }

    /**
     * POST Route for playerhand
     */
    #[Route("/game/21/player", name: "start_21_post", methods: ['POST'])]
    public function playerHand21Post(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $deck = $game->getDeck();
        $playerHand = $game->playerHand();
        $bank = $game->getBank();
        $player = $game->getPlayer();
        $rounds = $game->getRounds();

        $session->set("deck", $deck);

        $data = [
            "game" => $game,
            "deck" => $deck,
            "playerHand" => $playerHand,
            "bank" => $bank,
            "player" => $player,
            "rounds" => $rounds,
        ];
        return $this->render('card21/start_21.html.twig', $data);
    }

    /**
     * Route for bank hand
     */
    #[Route("/game/21/bank", name: "bankHand_21", methods: ['POST'])]
    public function bankHand21Post(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $deck = $game->getDeck();
        $playerHand = $game->playerHand();
        // $bankHand = $game->bankHand();
        $bank = $game->getBank();
        $player = $game->getPlayer();
        $rounds = $game->getRounds();

        $session->set("deck", $deck);

        $data = [
            "game" => $game,
            "deck" => $deck,
            "playerHand" => $playerHand,
            // "bankHand" => $bankHand,
            "bank" => $bank,
            "player" => $player,
            "rounds" => $rounds,
        ];
        return $this->render('card21/bankHand_21.html.twig', $data);
    }

    // #[Route("/game/21", name: "start_21_post", methods: ['POST'])]
    // public function start21Post(
    //     SessionInterface $session
    // ): Response {
    //     $game = $session->get("game");
    //     $deck = $game->getDeck();
    //     $playerHand = $game->playerHand();
    //     $bank = $game->getBank();
    //     $player = $game->getPlayer();
    //     $rounds = $game->getRounds();

    //     $session->set("deck", $deck);

    //     $data = [
    //         "game" => $game,
    //         "deck" => $deck,
    //         "playerHand" => $playerHand,
    //         "bank" => $bank,
    //         "player" => $player,
    //         "rounds" => $rounds,
    //     ];
    //     return $this->render('card21/start_21.html.twig', $data);
    // }

    /**
     * the landing route for cards
     */
    #[Route("/game/doc", name: "doc")]
    public function doc21(
    ): Response {

        return $this->render('card21/doc.html.twig');
    }
}