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

class ProjController extends AbstractController
{
    /**
     * the landing route for proj
     */
    #[Route("/proj", name: "proj")]
    public function proj(
        SessionInterface $session
    ): Response {
        $game = new Play21();
        $session->set("game", $game);

        $data = [];

        return $this->render('/proj/index.html.twig', $data);
    }

    /**
     * the landing route for proj
     */
    #[Route("/proj/about", name: "proj/about")]
    public function about(
        SessionInterface $session
    ): Response {
        $game = new Play21();
        $session->set("game", $game);

        $data = [];

        return $this->render('/proj/about_proj.html.twig', $data);
    }
}
