<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;

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
    ): Response
    {

        return $this->render('card/home.html.twig');
    }

     /**
     * testing class Card
     */
    #[Route("/game/card/test", name: "test")]
    public function test(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $cards = [];
        for ($i = 2; $i < 5; $i++) {
            $card = new Card($i, "hearts");
            $cards[$i] = $card->__toString();
        }

        $deck1 = new DeckOfCards();

        $deck2 = new DeckOfCards();
        $deck2->shuffle();
        $carddeal = $deck1->draw();




        $data = [
            "cards" => $cards,
            "deck1" => $deck1,
            "deck2" => $deck2,
            "carddeal" => $carddeal
        ];

        $session->set("cards", $cards);
        $session->set("deck1", $deck1);
        $session->set("deck2", $deck2);
        $session->set("carddeal", $carddeal);

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
