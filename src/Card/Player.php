<?php

namespace App\Card;

class Player
{
    protected string $name;

    protected int $account;

    protected array $hands = array();

    protected int $numOfHands;



    /**
     * Constructor to init Player
     */
    public function __construct(string $name = 'Player', int $account = 1000, int $numOfHands = 1 )
    {
        $this->name = $name;
        $this->account = $account;
        $this->hands = array();
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

    public function getHands() {
        return $this->hands;
    }

    public function setHands($card) {
        $this->hands[] = $card;
    }

    public function getNumOfHands() {
        return $this->numOfHands;
    }

    public function setNumOfHands($num) {
        $this->numOfHands = $num;
    }

    public function bet($amount) {
        if($this->account > $amount) {
            for($i = 0; $i < $this->numOfHands; $i++) {
                $this->account = $this->account - $amount;
            }
        } elseif ($this->account < $account) {
            $this->addFlash(
                'warning',
                'You dont have enough money to place this bet'
            );
        }        
    }
}
