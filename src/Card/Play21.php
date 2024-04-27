<?php

namespace App\Card;

/**
 * A game control class to play the game 21
 */
class Play21
{
    /**
     * variables that handles the scoure
     */
    protected int $bank = 0;
    protected int $player = 0;
    
    /**
     * @var int $round  counts the rounds of the game
     */
    protected int $rounds = 1;
    protected $deck = array();
    protected $draw = array();
    protected $playerHand = array();
    protected $bankHand = array();

    public function __construct()
    {
        $this->init21();
    }

    public function init21($bank = 0, $player = 0, $rounds = 1)
    {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $this->deck = $deck;
        $this->bank = $bank;
        $this->player = $player;
        $this->rounds = $rounds;
    }

    public function getBank()
    {
        return $this->bank;
    }

    public function getPlayer()
    {
        return $this->player;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function getDeck()
    {
        return $this->deck;
    }

    public function draw()
    {
        $draw = $this->deck->draw();
        $this->draw = $draw;
        return $draw;
    }

    public function playerHand()
    {
        $draw = $this->deck->draw();
        $strDraw = [];
        if($draw) {
            $str = $draw->getAsString();
            $strDraw = $str;
        }
        $this->playerHand[] = $strDraw;

        return $this->playerHand;
    }


}