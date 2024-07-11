<?php

namespace App\Card;

class Player
{
    /**
     * @var string $name  The name of the player
     */
    protected string $name;

    /**
     * @var int $account  The players account
     */
    protected int $account;


    /**
     * @var array<string|int, mixed> $hands  array of hands for player
     */
    protected array $hands = array();

    /**
     * @var array<string|int, mixed> $bets  array of bets for player
     */
    protected array $bets = array();

    /**
     * @var int $numOfHands  The amount of hands the player got
     */
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

    /**
     * Get the players name
     * @return string name  The name of the player
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the players name
     */
    public function setName(string $name): void
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
        echo $this->account;
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
    }
}
