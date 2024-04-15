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
        $card = new CardGraphic(6, "Hearts");
        $card = new CardGraphic(10, "Spades");
        $cards = $card->cardAsString();

        $deck1 = new DeckOfCards();
        $deckGraphic = $deck1->getAsString();

        $deck2 = new DeckOfCards();
        $deck2->shuffle();

        $deck3 = new DeckOfCards();
        $draw = $deck3->draw();
        $draw = $deck3->draw();

        $deck4 = new DeckOfCards();
        $draw = $deck4->draw();
        $deck4->shuffle();

        $deck5 = new DeckOfCards();

        $hand = new CardHand();
        $hand->addCard($deck5->draw());
        $hand->addCard($deck5->draw());

        $data = [
            "cards" => $cards,
            "deck1" => $deck1,
            "deckGraphic" => $deckGraphic,
            "deck2" => $deck2,
            "deck3" => $deck3,
            "deck4" => $deck4,
            "deck5" => $deck5,
            "hand" => $hand,
            "draw" => $draw,
        ];

        $session->set("cards", $cards);
        $session->set("deck1", $deck1);
        $session->set("deckGraphic", $deckGraphic);
        $session->set("deck2", $deck2);
        $session->set("deck3", $deck3);
        $session->set("deck4", $deck4);
        $session->set("deck5", $deck5);
        $session->set("hand", $hand);
        $session->set("draw", $draw);

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
    #[Route("game/session_destroyed", name: "session_destroyed", methods: ['GET'])]
    public function session_destroy(
        SessionInterface $session
    ): Response {

        $session->clear();
        $this->addFlash(
            'warning',
            'nu är sessionen raderad'
        );

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
            "deck" => $deck,
            "value" => $value,
            "suit" => $suit,
        ];

        $session->set("deck", $deck);
        $session->set("value", $value);
        $session->set("suit", $suit);

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

}
