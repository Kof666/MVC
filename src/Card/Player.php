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
    public function __construct(mixed $name = 'Player', mixed $account = 1000, mixed $numOfHands = 1)
    {
        $this->name = $name;
        $this->account = $account;
        $this->hands = array();
        $this->numOfHands = $numOfHands;
    }

    /**
     * Get the players name
     * @return mixed name  The name of the player
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * Set the players name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * Get Account
     *
     * @return int $account
     */
    public function getAccount(): int
    {
        return $this->account;
    }

    /**
     * Set Account
     *
     * @param int $amount   value to set account
     */
    public function setAccount($amount): void
    {
        $this->account = $amount;
    }

    /**
     * Get bets
     *
     * @return array<string|int, mixed> $bets
     */
    public function getBets(): array
    {
        return $this->bets;
    }

    /**
     * Get bet. Get one given bet in array
     *
     * @param mixed $num  number of hands
     */
    public function getBet($num): mixed
    {
        return $this->bets[$num];
    }

    /**
     * Clears array bets
     */
    public function clearBets(): void
    {
        $this->bets = array();
    }

    /**
     * Add value to account
     *
     * @param int $amount   value to add to account
     */
    public function addAccount($amount): void
    {
        echo $this->account;
        $this->account = $this->account + $amount;
    }

    /**
     * Get hands
     *
     * @return array<string|int, mixed>
     */
    public function getHands(): array
    {
        return $this->hands;
    }

    /**
     * Set hands
     *
     * @param mixed $card
     */
    public function setHands($card): void
    {
        $this->hands[] = $card;
    }

    /**
     * Get the number of hands player have
     *
     * @return int $numOfHands
     */
    public function getNumOfHands(): int
    {
        return $this->numOfHands;
    }

    /**
     * Set the number of hands player have
     *
     * @param int $num  new value
     */
    public function setNumOfHands($num): void
    {
        $this->numOfHands = $num;
    }

    /**
     * Bets
     *
     * @param int $bet1
     * @param int $bet2
     * @param int $bet3
     */
    public function bet($bet1, $bet2, $bet3): void
    {
        $this->account = $this->account - $bet1 - $bet2 - $bet3;
        $this->bets[] = $bet1;
        $this->bets[] = $bet2;
        $this->bets[] = $bet3;
    }
}
