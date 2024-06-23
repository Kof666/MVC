<?php

namespace App\Card;

class Player
{
    protected string $name;

    protected int $account;

    protected int $numOfHands;



    /**
     * Constructor to init Player
     */
    public function __construct(string $name = 'Player', int $account = 500, int $numOfHands = 1 )
    {
        $this->name = $name;
        $this->account = $account;
        $this->numOfHands = $numOfHands;
    }

    public function getName() {
        return $this->name;
    }

    public function getAccount() {
        return $this->account;
    }
}
