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
    * testing class Card
    */
    #[Route("/game/card/test", name: "test")]
    public function test(
        Request $request,
        SessionInterface $session
    ): Response {
            $card = new CardGraphic(6, "hearts");
            $cards = $card->getAsString();

        $deck1 = new DeckOfCards();

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
            "deck2" => $deck2,
            "deck3" => $deck3,
            "deck4" => $deck4,
            "deck5" => $deck5,
            "hand" => $hand,
            "draw" => $draw,
            // "hand" => $hand
        ];

        $session->set("cards", $cards);
        $session->set("deck1", $deck1);
        $session->set("deck2", $deck2);
        $session->set("deck3", $deck3);
        $session->set("deck4", $deck4);
        $session->set("deck5", $deck5);
        $session->set("hand", $hand);
        $session->set("draw", $draw);
        // $session->set("hand", $hand);

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

}