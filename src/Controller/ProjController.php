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
     * route for database documentation
     */
    #[Route("/proj/about/database", name: "database_proj")]
    public function databaseBj(
        SessionInterface $session
    ): Response {
        $game = $session->get("game");

        $data = [
            "game" => $game
        ];

        return $this->render('proj/database_proj.html.twig', $data);
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
        // $game->addToPot($bet, $player->getNumOfHands());
        $game->deal($player->getNumOfHands());
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

        // $str = $game->bust();
        // if($str == 'It´s fun to play...right?') {
        // $this->addFlash(
        //     'notice',
        //     $str
        // );
        // }

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
        $bankScore = $game->getBankScore();
        $playerScore = $game->getPlayerScore();

        // $game->endOfRound($player);
        // $str = $game->playerBust($player, 0);
        // if($str != 'It´s fun to play...right?') {
        //     $this->addFlash(
        //         'notice',
        //         $str
        //     );
        // }

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

        // $game->endOfRound($player);
        // $str = $game->playerBust($player, 1);
        // if($str != 'It´s fun to play...right?') {
        //     $this->addFlash(
        //         'notice',
        //         $str
        //     );
        // }

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

        // $str = $game->playerBust($player, 2);
        // if($str != 'It´s fun to play...right?') {
        //     $this->addFlash(
        //         'notice',
        //         $str
        //     );
        // }

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

        // $game->endOfRound($player);
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

        $str = $game->getWinner($player);
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
