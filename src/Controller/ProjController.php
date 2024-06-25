<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;
use App\Card\CardHand;
use App\Card\CardGraphic;
use App\Card\PlayBlackjack;
use App\Card\Player;

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
        // $player = new Player();
        // $session->set("player", $player);

        $data = [
            "game" => $game
        ];

        return $this->render('proj/index.html.twig', $data);
    }

    /**
     * about route for blackjack
     */
    #[Route("/proj/about", name: "about_proj")]
    public function aboutBj(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");

        $data = [
            "game" => $game
        ];

        return $this->render('proj/about_proj.html.twig', $data);
    }

    /**
     * init route for blackjack
     */
    #[Route("/proj/init", name: "init_get", methods: ['GET'])]
    public function init(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $name = 'Your name...';
        // $player = $session->get("player");

        $data = [
            "game" => $game,
            // "player" => $player,
            "name" => $name
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

        //$players = array();
        // for($i = 1; $i < $numOfHands+1; $i++) {
        //     $players[] = ${"player$i"} = new Player("{$name}{$i}");
        // }
        // $session->set("players", $players);

        $player = $session->get("player");

        // $numOfHands = (int)$numOfHands;
        // $player->setNumOfHands($numOfHands);
        // $name = $request->request->get('name');

        $player = new Player($name, 1000, $numOfHands);
        $session->set("player", $player);
        $player->setName($name);

        $data = [
            "game" => $game,
            "player" => $player,
            // "name" => $name,
            // "numOfHands" => $numOfHands
        ];

        // $hand = $numHands;
        // for ($i = 0; $i < $numDice; $i++) {
        //     $hand->add(new DiceGraphic());
        // }
        // $hand->roll();

        return $this->render('proj/init.html.twig', $data);
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
        // $name = $player->getName();
        // $account = $player->getAccount();
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        // $bankScore = $game->getBankScore();
        // $playerScore = $game->getPlayerScore();

        // $name = $request->request->get('name');
        // $player->setName($name);
        // $numOfHands = $request->request->get('num_of_hands');
        // $numOfHands = (int)$numOfHands;
        // $player->setNumOfHands($numOfHands);

        $data = [
            "game" => $game,
            "player" => $player,
            // "name" => $name,
            // "account" => $account,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            // "bank_score" => $bankScore,
            // "player_score" => $playerScore,
            // "num_of_hands" => $numOfHands
        ];
        // echo var_dump($session->get("pig_dicehand"));
        return $this->render('proj/bet.html.twig', $data);
    }

    /**
     * Route for dealing cards after bet
     */
    #[Route("/proj/deal", name: "deal")]
    public function deal(
        Request $request,
        SessionInterface $session
    ): Response {
        $bet = $request->request->get('bet');
        $game = $session->get("game");
        $player = $session->get("player");
        $game->deal($player->getNumOfHands());
        // $name = $player->getName();
        $player->bet($bet);
        // $account = $player->getAccount();
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
            // "name" => $name,
            // "account" => $account,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            // "bet" => $bet,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "hand_score" => $handScore
        ];
        return $this->render('proj/deal.html.twig', $data);
    }

    /**
     * Route for hit
     */
    #[Route("/proj/hit", name: "hit_get", methods: ['GET'])]
    public function hit(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        $game->playerdraw();
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
    #[Route("/proj/hit", name: "hit_post", methods: ['POST'])]
    public function hitCallback(
        Request $request,
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $player = $session->get("player");
        $game->playerdraw();
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
     * POST Route for playerhand
     */
    #[Route("/proj/surface", name: "surface")]
    public function surface(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        // $game->playerDraw();
        $playerHand = $game->playerHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $str = $game->bustOrWinn();
        if($str != 'It´s fun to play...right?') {
            $this->addFlash(
                'notice',
                $str
            );
        }

        $session->set("game", $game);

        $draw = $session->get("draw");

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds,
            "draw" => $draw
        ];

        return $this->render('deal.html.twig', $data);
    }

    /**
     * POST Route for playerhand
     */
    #[Route("/game/21/player", name: "start_21_post", methods: ['POST'])]
    public function playerHand21Post(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $game->playerDraw();
        $playerHand = $game->playerHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $str = $game->bustOrWinn();
        if($str != 'It´s fun to play...right?') {
            $this->addFlash(
                'notice',
                $str
            );
        }

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds
        ];

        if ($str != 'It´s fun to play...right?') {
            return $this->render('card21/start_21_bustOrWinn.html.twig', $data);
        }

        return $this->render('card21/start_21.html.twig', $data);
    }

    /**
     * Route for bank hand
     */
    #[Route("/game/21/bank", name: "bankHand_21", methods: ['POST'])]
    public function bankHand21Post(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $playerHand = $game->playerHand();
        $bankHand = $game->bankDraw();
        $bankScore = $game->getBankScore();
        // $bankHand = $game->bankHand();
        $playerScore = $game->getPlayerScore();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $str = $game->getWinner();
        $this->addFlash(
            'notice',
            $str
        );

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds

        ];
        return $this->render('card21/bankHand_21.html.twig', $data);
    }

    /**
     * Route for bank hand
     */
    #[Route("/game/21/new_round", name: "new_round_21", methods: ['POST'])]
    public function newRound21(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");
        $game->clearHands();
        $playerHand = $game->playerHand();
        $bankHand = $game->bankHand();
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();
        $game->setRounds();
        $rounds = $game->getRounds();
        $playerRounds = $game->getPlayerRounds();
        $bankRounds = $game->getBankRounds();

        $session->set("game", $game);

        $data = [
            "game" => $game,
            "playerHand" => $playerHand,
            "bankHand" => $bankHand,
            "bank_score" => $bankScore,
            "player_score" => $playerScore,
            "rounds" => $rounds,
            "player_rounds" => $playerRounds,
            "bank_rounds" => $bankRounds

        ];
        return $this->render('card21/start_21.html.twig', $data);
    }

    /**
     * the landing route for cards
     */
    #[Route("/game/doc", name: "doc")]
    public function doc21(
    ): Response {

        return $this->render('card21/doc.html.twig');
    }
}
