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
        $game->playerDraw();
        $playerHand = $game->playerHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds
        ];
        return $this->render('card21/start_21_surface.html.twig', $data);
    }

    /**
     * POST Route for playerhand
     */
    #[Route("/game/21/start", name: "start_21_surface")]
    public function surface(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        // $game->playerDraw();
        $playerHand = $game->playerHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $str = $game->bustOrWinn();
        if($str) {
            $this->addFlash(
                'notice',
                $str
            );
        }

        $session->set("game", $game);

        $draw = $session->get("draw");

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds,
            "draw" => $draw
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
        $game->playerDraw();
        $playerHand = $game->playerHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $str = $game->bustOrWinn();
        if($str) {
            $this->addFlash(
                'notice',
                $str
            );
        }

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds
        ];

        if ($str) {
            return $this->render('card21/start_21_bustOrWinn.html.twig', $data);
        } elseif (!$str) {
            return $this->render('card21/start_21.html.twig', $data);
        }
    }

    /**
     * Route for bank hand
     */
    #[Route("/game/21/bank", name: "bankHand_21", methods: ['POST'])]
    public function bankHand21Post(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $playerHand = $game->playerHand();
        $bankHand = $game->bankDraw();
        $bankScore = $game->getBankScore();
        // $bankHand = $game->bankHand();
        $playerScore = $game->getPlayerScore();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $str = $game->getWinner();
        $this->addFlash(
            'notice',
            $str
        );

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds

        ];
        return $this->render('card21/bankHand_21.html.twig', $data);
    }

    /**
     * Route for bank hand
     */
    #[Route("/game/21/new_round", name: "new_round_21", methods: ['POST'])]
    public function newRound21(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $game->clearHands();
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $game->setRounds();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds

        ];
        return $this->render('card21/start_21.html.twig', $data);
    }

    /**
     * the landing route for cards
     */
    #[Route("/game/doc", name: "doc")]
    public function doc21(
    ): Response {

        return $this->render('card21/doc.html.twig');
    }
}
