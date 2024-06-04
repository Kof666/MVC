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

/**
 * Routes to control the report web-site
 */
class MyPageController extends AbstractController
{
    #[Route('/me', name: 'me')]
    public function meRoute(): Response
    {
        $data = [];

        return $this->render('/me.html.twig', $data);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        $data = [];

        return $this->render('/about.html.twig', $data);
    }

    #[Route('/report', name: 'report')]
    public function report(): Response
    {
        $data = [];

        return $this->render('/report.html.twig', $data);
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {
        $number = random_int(1, 6);
        $tag = null;
        if($number == 6) {
            $tag = 'winner';
        } elseif ($number != 6) {
            $tag = 'loser';
        }
        $data = [
            'number' => $number,
            'tag' => $tag
        ];

        return $this->render('/lucky.html.twig', $data);
    }

    #[Route('/')]
    public function start(): Response
    {
        $data = [];

        return $this->render('/me.html.twig', $data);
    }

    #[Route('/api', name: 'api')]
    public function api(
        SessionInterface $session
    ): Response {
        $apiDeck = new DeckOfCards();
        $apiDeck->shuffle();

        $session->set("api_deck", $apiDeck);
        // $deck = new DeckOfCards();
        // $apiDeck = $deck->getDeck();

        $data = [
            "api_deck" => $apiDeck
        ];

        // $session->set("api_deck", $apiDeck);

        return $this->render('/api.html.twig', $data);
    }

    #[Route('/metrics', name: 'metrics')]
    public function metrics(): Response
    {
        $data = [];

        return $this->render('/metrics.html.twig', $data);
    }
}
