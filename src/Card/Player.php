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

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getAccount() {
        return $this->account;
    }

    public function setAccount($amount) {
        $this->account = $account;
    }

    public function bet($amount) {
        if($this->account > $amount) {
            $this->account = $this->account - $amount;
        } elseif ($this->account < $account) {
            consolelog('not enough money on account');
        }        
    }
}
