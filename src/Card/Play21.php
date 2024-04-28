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
    protected int $bankScore = 0;
    protected int $playerScore = 0;
    
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

    public function getBankScore()
    {
        return $this->bankScore;
    }

    public function setBankScore()
    {
        return array_sum($this->bankHand);
    }

    public function getPlayerScore()
    {
        return $this->playerScore;
    }

    public function setPlayerScore()
    {
        return array_sum($this->playerHand);
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
        return $this->playerHand;
    }

    public function playerdraw()
    {
        if($this->playerScore <= 21) {
            $value = 0;
            $draw = $this->deck->draw();
            $value = $value + $draw->getValue();
            var_dump($value);
            $value = $draw->getValue();
            $this->playerScore = $this->playerScore + $value;
            if($draw) {
                $this->playerHand[] = $draw->getAsString();
            }
        }

        return $this->playerHand;
    }

    public function playerScore()
    {
        return array_sum($this->playerHand);
    }

    public function bankHand()
    {
        return $this->bankHand;
    }

    /**
     * @return array<string>
     */
    public function bankdraw(): array
    {
        $value = 0;
        while ($value < 17) {
            $draw = $this->deck->draw();
            $value = $value + $draw->getValue();
            // var_dump($value);
            $this->bankScore = $value;
            $this->bankHand[] = $draw->getAsString();
        }

        return $this->bankHand;
    }

    public function clearHands()
    {
        $this->playerHand = array();
        $this->bankHand = array();
    }

}