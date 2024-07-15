<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;
use App\Card\CardGraphic;
use App\Card\PlayBlackjack;
use App\Card\Player;

use App\Entity\Blackjack;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BlackjackRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProjController extends AbstractController
{
    /**
     * the landing route for blackjack
     */
    #[Route("/proj", name: "proj")]
    public function homeBJ(
        SessionInterface $session
    ): Response {
        $game = new PlayBlackjack();
        $session->set("game", $game);

        $data = [
            "game" => $game
        ];

        return $this->render('proj/index.html.twig', $data);
    }

    /**
     * about route for blackjack
     */
    #[Route("/proj/about", name: "about_proj")]
    public function aboutBj(): Response {

        return $this->render('proj/about_proj.html.twig');
    }

    /**
     * api route for blackjack
     */
    #[Route("/proj/api", name: "api_proj")]
    public function apiBj(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");

        $data = [
            "game" => $game,
            "player" => $player
        ];

        return $this->render('proj/api.html.twig', $data);
    }

    /**
     * route for database documentation
     */
    #[Route("/proj/about/database", name: "database_proj")]
    public function databaseBj(): Response {

        return $this->render('proj/database_proj.html.twig');
    }

    /**
     * init route for blackjack
     */
    #[Route("/proj/init", name: "init_get", methods: ['GET'])]
    public function init(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");

        $data = [
            "game" => $game
        ];

        return $this->render('proj/init.html.twig', $data);
    }

    /**
     * post for init
     */
    #[Route("/proj/init", name: "init_post", methods: ['POST'])]
    public function initCallback(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $name = $request->request->get('name');
        $numOfHands = $request->request->get('num_of_hands');
        $player = $session->get("player");
        $player = new Player($name, 1000, $numOfHands);
        $session->set("player", $player);
        $player->setName($name);

        $data = [
            "game" => $game,
            "player" => $player,
        ];

        return $this->render('proj/bet.html.twig', $data);
    }

    /**
     * landing page for start play and place bet
     */
    #[Route("/proj/bet", name: "bet")]
    public function bet(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $game->clearHands();
        $player->clearBets();

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "player" => $player,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
        ];

        return $this->render('proj/bet.html.twig', $data);
    }

    /**
     * Route for dealing cards after bet
     */
    #[Route("/proj/play", name: "deal")]
    public function deal(
        Request $request,
        SessionInterface $session
    ): Response {
        $bet1 = $request->request->get('bet1');
        $bet2 = $request->request->get('bet2');
        $bet3 = $request->request->get('bet3');
        $game = $session->get("game");
        $player = $session->get("player");
        $game->dealFirstPlayerCard($player->getNumOfHands());
        $game->dealFirstBankCard($player->getNumOfHands());
        $game->dealSecondPlayerCard($player->getNumOfHands());
        $game->dealSecondBankCard($player->getNumOfHands());

        $player->bet($bet1, $bet2, $bet3);
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $handScore = $game->getHandScore();
        $session->set("game", $game);
        $session->set("player", $player);

        $data = [
            "game" => $game,
            "player" => $player,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "hand_score" => $handScore
        ];
        return $this->render('proj/deal.html.twig', $data);
    }

    /**
     * Route for hit
     */
    #[Route("/proj/hitg", name: "hit_get")]
    public function hit(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        // $game->playerdraw($player->getNumOfHands());
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "player" => $player,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
        ];
        return $this->render('proj/hit.html.twig', $data);
    }

    /**
     * Route for hit
     */
    #[Route("/proj/hit1", name: "hit1")]
    public function hit1Callback(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        $game->playerdraw(0);
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $str = $game->playBust($player);

        $this->addFlash(
            'notice',
            $str
        );

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "player" => $player,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
        ];

        return $this->render('proj/hit1.html.twig', $data);
    }

    /**
     * Route for hit
     */
    #[Route("/proj/hit2", name: "hit2")]
    public function hit2Callback(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        $game->playerdraw(1);
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();

        $str = $game->playBust($player);

        $this->addFlash(
            'notice',
            $str
        );

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "player" => $player,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,

        ];
        return $this->render('proj/hit2.html.twig', $data);
    }

    /**
     * Route for hit
     */
    #[Route("/proj/hit3", name: "hit3")]
    public function hit3Callback(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        $game->playerdraw(2);
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();

        $str = $game->playBust($player);

        $this->addFlash(
            'notice',
            $str
        );

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "player" => $player,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
        ];
        return $this->render('proj/hit3.html.twig', $data);
    }

    /**
     * Route for stand
     */
    #[Route("/proj/stand", name: "stand")]
    public function stand(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        $playerHand = $game->playerHand();
        $bankHand = $game->bankDraw();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();

        $str = $game->getWinner($player);
        if($str != 'It´s fun to play...right?') {
            $this->addFlash(
                'notice',
                $str
            );
        }

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "player" => $player,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
        ];
        return $this->render('proj/stand.html.twig', $data);
    }
}
