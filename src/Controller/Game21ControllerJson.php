<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;
use App\Card\CardHand;
use App\Card\CardGraphic;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Game21ControllerJson
{
    /**
     * route to view sorted deck of cards
     */
    #[Route("/api/game", name: "api_game")]
    public function apiGame(
        SessionInterface $session
    ): Response {

        $game = $session->get("game");
        $rounds = $game->getRounds();
        $bankRounds = $game->getBankRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();

        $data = [
            "rounds" => $rounds,
            "bank_rounds" => $bankRounds,
            "player_rounds" => $playerRounds,
            "bank_score" => $bankScore,
            "player_score" => $playerScore
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
