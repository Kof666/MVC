<?php

namespace App\Controller;

use App\Entity\Game;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\GameRepository;

use App\Card\PlayBlackjack;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GameController extends AbstractController
{
    #[Route('/game', name: 'app_game')]
    public function index(): Response
    {
        return $this->render('game/index.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }

    #[Route('/proj/game/view/hands', name: 'game_view_all')]
    public function viewAllPlayers(
        GameRepository $gameRepository
    ): Response {
        $game = $gameRepository->findAll();
        $hands = $game->getBankHand();

        $data = [
            'hands' => $hands
        ];

        return $this->render('proj/view_all_hands.html.twig', $data);
    }
}
