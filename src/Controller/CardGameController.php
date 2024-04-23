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
    #[Route("/card", name: "card_start")]
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
    #[Route("/card/test", name: "test")]
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
    #[Route("/session", name: "session")]
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
    #[Route("/session/delete", name: "session_destroyed", methods: ['GET'])]
    public function session_destroy(
        SessionInterface $session
    ): Response {

        $session->clear();

        $this->addFlash(
            'warning',
            'nu är sessionen raderad!!'
        );

        $data = [
            'session' => $session->all()
        ];

        return $this->render('card/session/index.html.twig', $data);
    }

    /**
     * route to view sorted deck of cards
     */
    #[Route("/card/deck", name: "card_deck")]
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
    #[Route("/card/deck/shuffle", name: "shuffle")]
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
    #[Route("/card/deck/draw", name: "draw_get", methods: ['GET'])]
    public function draw(
        Request $request,
        SessionInterface $session
    ): Response {
        $drawDeck = $session->get("draw_deck");
        $draw = $session->get('draw');
        $strDraw = $session->get('str_draw');

        $cardCount = $drawDeck->cardCount();

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
            "card_count" => $cardCount,
            "draw" => $draw,
            "str_draw" => $strDraw
        ];
        return $this->render('card/draw.html.twig', $data);
    }

    /**
     * route for draw cards
     */
    #[Route("/card/deck/draw", name: "draw_post", methods: ['POST'])]
    public function drawCallback(
        Request $request,
        SessionInterface $session
    ): Response {

        $deck = $session->get("draw_deck");
        $draw = $deck->draw();

        $strDraw = [];
        if($draw) {
            $str = $draw->getAsString();
            $strDraw[0] = $str;
        }

        $session->set("draw", $draw);
        $session->set("str_draw", $strDraw);

        $data = [
            "deck" => $deck,
            "draw" => $draw,
            "str_draw" => $strDraw
        ];

        return $this->redirectToRoute('draw_get', $data);
    }

    /**
     * route for draw cards
     */
    #[Route("/card/deck/draw_cards", name: "draw_cards", methods: ['POST'])]
    public function drawCards(
        Request $request,
        SessionInterface $session
    ): Response {
        $strDraw = [];
        $num = $request->request->get('num_cards');
        $drawDeck = $session->get("draw_deck");
        $cardCount = $drawDeck->cardCount();

        if ($num > 52) {
            throw new \Exception("Det är bara 52 kort i en kortlek...");
        }

        if($cardCount > 0 && $cardCount >= $num) {
            for($i = 0; $i < $num; $i++) {
                $draw = $drawDeck->draw();
                $strDraw[$i] = $draw->getAsString();
                $session->set("draw", $draw);
            }
        } else {
            $draw = [];
            $this->addFlash(
                'notice',
                'Du kan inte dra fler kort än det finns kvar i leken!'
            );
        }

        $cardCount = $drawDeck->cardCount();

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

        $session->set("num", $num);
        $session->set("card_count", $cardCount);
        $session->set("str_draw", $strDraw);
        $data = [
            'num' => $num,
            "draw_deck" => $drawDeck,
            "card_count" => $cardCount,
            "str_draw" => $strDraw,
            "draw" => $draw
        ];

        return $this->render('card/draw.html.twig', $data);
    }

    /**
     * route for shuffle
     */
    #[Route("/card/deck/draw_shuffle", name: "draw_shuffle", methods: ['POST'])]
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
