<?php

namespace App\Card;

class Player
{
    protected string $name;

    protected int $account;

    protected array $hands = array();

    protected array $bets = array();

    protected int $numOfHands;



    /**
     * Constructor to init Player
     */
    public function __construct(string $name = 'Player', int $account = 1000, int $numOfHands = 1)
    {
        $this->name = $name;
        $this->account = $account;
        $this->hands = array();
        $this->numOfHands = $numOfHands;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function setAccount($amount)
    {
        $this->account = $amount;
    }

    public function getBets()
    {
        return $this->bets;
    }

    public function getBet($num)
    {
        return $this->bets[$num];
    }

    public function setBets($amount)
    {
        $this->bets = $amount;
    }

    public function clearBets()
    {
        $this->bets = array();
    }

    public function addAccount($amount)
    {
        $this->account = $this->account + $amount;
    }

    public function getHands()
    {
        return $this->hands;
    }

    public function setHands($card)
    {
        $this->hands[] = $card;
    }

    public function getNumOfHands()
    {
        return $this->numOfHands;
    }

    public function setNumOfHands($num)
    {
        $this->numOfHands = $num;
    }

    public function bet($bet1, $bet2, $bet3)
    {
        $this->account = $this->account - $bet1 - $bet2 - $bet3;
        $this->bets[] = $bet1;
        $this->bets[] = $bet2;
        $this->bets[] = $bet3;
        // if($this->account > $amount) {
        //     for($i = 0; $i < $this->numOfHands; $i++) {
        //         $this->account = $this->account - $amount;
        //         $this->bets[] = $amount;
        //     }
        // }
    }
}
