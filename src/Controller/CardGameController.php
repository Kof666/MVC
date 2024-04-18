<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;
use App\Card\CardHand;
use App\Card\CardGraphic;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CardGameController extends AbstractController
{
    /**
     * the landing route for cards
     */
    #[Route("/game/card", name: "card_start")]
    public function home(
        Request $request,
        SessionInterface $session
    ): Response {

        $drawDeck = new DeckOfCards();
        $drawDeck->shuffle();

        $session->set("draw_deck", $drawDeck);

        return $this->render('card/home.html.twig');
    }

    /**
    * testing Card classes
    */
    #[Route("/game/card/test", name: "test")]
    public function test(
        Request $request,
        SessionInterface $session
    ): Response {
        // $card = new CardGraphic(6, "Hearts");
        // $card = new CardGraphic(10, "Spades");
        // $cards = $card->cardAsString();

        // $deck1 = new DeckOfCards();
        // $deckGraphic = $deck1->getAsString();

        // $deck2 = new DeckOfCards();
        // $deck2->shuffle();

        // $deck3 = new DeckOfCards();
        // $draw = $deck3->draw();
        // $draw = $deck3->draw();

        // $deck4 = new DeckOfCards();
        // $draw = $deck4->draw();
        // $deck4->shuffle();

        // $deck5 = new DeckOfCards();

        // $hand = new CardHand();
        // $hand->addCard($deck5->draw());
        // $hand->addCard($deck5->draw());

        $data = [
            // "cards" => $cards,
            // "deck1" => $deck1,
            // "deckGraphic" => $deckGraphic,
            // "deck2" => $deck2,
            // "deck3" => $deck3,
            // "deck4" => $deck4,
            // "deck5" => $deck5,
            // "hand" => $hand,
            // "draw" => $draw,
        ];

        // $session->set("cards", $cards);
        // $session->set("deck1", $deck1);
        // $session->set("deckGraphic", $deckGraphic);
        // $session->set("deck2", $deck2);
        // $session->set("deck3", $deck3);
        // $session->set("deck4", $deck4);
        // $session->set("deck5", $deck5);
        // $session->set("hand", $hand);
        // $session->set("draw", $draw);

        return $this->render('card/test/test_page.html.twig', $data);
    }

    /**
     * landing page for Cards session
     */
    #[Route("game/session", name: "session")]
    public function play(
        SessionInterface $session
    ): Response {

        $data = [
            'session' => $session->all()
        ];

        return $this->render('card/session/index.html.twig', $data);
    }

    /**
     * destroy session
     */
    #[Route("game/session/delete", name: "session_destroyed", methods: ['GET'])]
    public function session_destroy(
        SessionInterface $session
    ): Response {

        $session->clear();

        $data = [
            'session' => $session->all()
        ];

        return $this->render('card/session/index.html.twig', $data);
    }

    /**
     * route to view sorted deck of cards
     */
    #[Route("/game/card/deck", name: "card_deck")]
    public function deck(
        Request $request,
        SessionInterface $session
    ): Response {

        $deckOfCards = new DeckOfCards();
        $deck = $deckOfCards->getAsString();

        $value = $deckOfCards->getValue();
        $suit = $deckOfCards->getSuit();

        $data = [
            "deck" => $deck
        ];

        $session->set("deck", $deck);

        return $this->render('card/deck.html.twig', $data);
    }

    /**
     * route for shuffled deck of cards
     */
    #[Route("/game/card/deck/shuffle", name: "shuffle")]
    public function shuffle(
        Request $request,
        SessionInterface $session
    ): Response {

        $deckOfCards = new DeckOfCards();
        $deck = $deckOfCards->shuffle();
        $deck = $deckOfCards->getAsString();

        $data = [
            "deck" => $deck
        ];

        $session->set("deck", $deck);

        return $this->render('card/shuffle.html.twig', $data);
    }

    /**
     * routes for draw a card
     */
    #[Route("/game/card/deck/draw", name: "draw_get", methods: ['GET'])]
    public function draw(
        Request $request,
        SessionInterface $session
    ): Response
    {
        // $num = $session->get('num_cards');
        // $numCards = $request->request->get('num_cards');
        // $num = $numCards;

        $drawDeck = $session->get("draw_deck");
        $draw = $session->get('draw');
        $strDraw = $session->get('str_draw');
        
        $cardCount = $drawDeck->cardCount();
        // $cardCount = $session->set("card_count", $cardCount);

        // $strDeck = $drawDeck->getAsString();
        // $strDraw = [];
        // if($draw) {
        //     $str = $draw->getAsString();
        //     $strDraw[0] = $str;
        // }
        if($draw) {
            for($i = 0; $i < sizeOf($strDraw); $i++) {
                $strDraw[$i] = $draw->getAsString();
            }
        }

        if($cardCount <= 5 && $cardCount > 0) {
            $this->addFlash(
                'notice',
                'Kortleken börjar ta slut.. kanske dags att blanda leken'
            );
        }

        if($cardCount == 0) {
            $this->addFlash(
                'warning',
                'Nu är kortleken slut. Nu måste du blanda leken för att fortsätta!!!'
            );
        }

        if($cardCount == 52) {
            $this->addFlash(
                'notice',
                'Kortleken är blandad. lycka till'
            );
        }

        $data = [
            "draw_deck" => $drawDeck,
            // "str_deck" => $strDeck,
            // "num" => $num,
            "card_count" => $cardCount,
            "draw" => $draw,
            "str_draw" => $strDraw
        ];

        // $session->set("str_deck", $strDeck);
        // $session->set("str_draw", $strDraw);
        // var_dump($draw);
        return $this->render('card/draw.html.twig', $data);
    }

    /**
     * route for draw a card
     */
    #[Route("/game/card/deck/draw", name: "draw_post", methods: ['POST'])]
    public function drawCallback(
        Request $request,
        SessionInterface $session
    ): Response {

        $deck = $session->get("draw_deck");
        $draw = $deck->draw();
        // $last = $deck->getLast(); // kanske göra en funktion cardasstring i deck....
        // // $last = $deck->getAsString();

        $strDraw = [];
        if($draw) {
            $str = $draw->getAsString();
            $strDraw[0] = $str;
        }

        $session->set("draw", $draw);
        $session->set("str_draw", $strDraw);
        // $session->set("last", $last);
        $data = [
            "deck" => $deck,
            "draw" => $draw,
            "str_draw" => $strDraw,
            // "last" => $last,
        ];

        return $this->redirectToRoute('draw_get', $data);
    }

    /**
     * Route
     */
    #[Route("/game/card/deck/draw_cards", name: "draw_cards", methods: ['POST'])]
    public function drawCards(
        Request $request,
        SessionInterface $session
        ): Response
    {
        $strDraw = [];
        $num = $request->request->get('num_cards');
        $drawDeck = $session->get("draw_deck");
        $cardCount = $drawDeck->cardCount();

        if ($num > 52) {
            throw new \Exception("Det är bara 52 kort i en kortlek...");
        }

        if($cardCount > 0) {
            for($i = 0; $i < $num; $i++) {
                $draw = $drawDeck->draw();
                $strDraw[$i] = $draw->getAsString();
            }
        }

        $cardCount = $drawDeck->cardCount();
        
        // } else {
        //     $draw = null;

        //     $this->addFlash(
        //         'warning',
        //         'Nu är kortleken slut. Nu måste du blanda leken för att fortsätta!!!'
        //     );
        // }

        if($cardCount <= 5 && $cardCount > 0) {
            $this->addFlash(
                'notice',
                'Kortleken börjar ta slut.. kanske dags att blanda leken'
            );
        }

        if($cardCount == 0) {
            $this->addFlash(
                'warning',
                'Nu är kortleken slut. Nu måste du blanda leken för att fortsätta!!!'
            );
        }

        // if($cardCount == 52) {
        //     $this->addFlash(
        //         'notice',
        //         'Kortleken är blandad. lycka till'
        //     );
        // }
        $session->set("num", $num);
        $session->set("card_count", $cardCount);
        $session->set("str_draw", $strDraw);
        $session->set("draw", $draw);
        $data = [
            'num' => $num,
            "draw_deck" => $drawDeck,
            "card_count" => $cardCount,
            "str_draw" => $strDraw,
            "draw" => $draw
        ];

        // var_dump($draw);
        return $this->render('card/draw.html.twig', $data);
    }

        /**
     * route for draw a card
     */
    #[Route("/game/card/deck/draw_shuffle", name: "draw_shuffle", methods: ['POST'])]
    public function shuffleCallback(
        Request $request,
        SessionInterface $session
    ): Response {
        $deck = $session->get("draw_deck");
        $deck->shuffle();
        $session->set("draw_deck", $deck);

        $data = [
            "deck" => $deck
        ];

        return $this->redirectToRoute('draw_get', $data);
    }

}
