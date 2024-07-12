<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;
use App\Card\CardGraphic;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CardGameControllerJson
{
    /**
     * route to view sorted deck of cards
     */
    #[Route("/api/deck", name: "api_deck")]
    public function apiDeck(
        SessionInterface $session
    ): Response {

        $deckOfCards = new DeckOfCards();
        $apiDeckSorted = $deckOfCards->getAsString();

        $data = [
            "api_deck_sorted" => $apiDeckSorted
        ];

        $session->set("api_deck_sorted", $apiDeckSorted);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    /**
     * route for shuffled deck of cards
     */
    #[Route("/api/deck/shuffle", name: "api_shuffle")]
    public function apiShuffle(
        SessionInterface $session
    ): Response {

        $deckOfCards = new DeckOfCards();
        $deckOfCards->shuffle();
        $apiDeckShuffled = $deckOfCards->getAsString();

        $data = [
            "api_deck_shuffled" => $apiDeckShuffled
        ];

        $session->set("api_deck_shuffled", $apiDeckShuffled);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    /**
     * Route for draw
     */
    #[Route("/api/deck/draw", name: "api_deck_draw_get", methods: ['GET'])]
    public function apiDrawGet(
        // Request $request,
        SessionInterface $session
    ): Response {
        $deckOfCards = $session->get("api_deck");

        $apiDeckDraw = $deckOfCards->getAsString();

        $apiCount = $deckOfCards->cardCount();

        $data = [
            "api_count" => $apiCount,
            "api_deck_draw" => $apiDeckDraw
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
    #[Route("/api/deck/draw", name: "api_deck_draw_post", methods: ['POST'])]
    public function apiDraw(
        // Request $request,
        SessionInterface $session
    ): Response {
        $deckOfCards = $session->get("api_deck");
        $deckOfCards->draw();
        $apiDeckDraw = $deckOfCards->getAsString();

        $apiCount = $deckOfCards->cardCount();

        $session->set("api_deck_draw", $apiDeckDraw);
        $session->set("api_count", $apiCount);

        $data = [
            "api_count" => $apiCount,
            "api_deck_draw" => $apiDeckDraw
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }


    /**
     * Route for draw cards post
     */
    #[Route("/api/deck/draw_cards", name: "api_deck_draw_num", methods: ['POST'])]
    public function apiDrawCards(
        Request $request,
        SessionInterface $session
    ): Response {
        $apiNum = $request->request->get('api_num_cards');
        $deckOfCards = $session->get("api_deck");
        // $cardCount = $deckOfCards->cardCount();

        if($apiNum) {
            for($i = 0; $i < $apiNum; $i++) {
                $deckOfCards->draw();
            }
        }


        $apiDeckDraw = $deckOfCards->getAsString();

        $apiCount = $deckOfCards->cardCount();

        $session->set("api_deck_draw", $apiDeckDraw);
        $session->set("api_count", $apiCount);
        $session->set("api_num", $apiNum);

        $data = [
            "api_count" => $apiCount,
            "api_deck_draw" => $apiDeckDraw
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
