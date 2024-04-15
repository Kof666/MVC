<?php

namespace App\Card;

class CardHand
{
    private $cards;

    public function __construct()
    {
        $this->cards = [];
    }

    public function addCard(Card $card)
    {
        $this->cards[] = $card;
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function getTotalValue()
    {
        $totalValue = 0;
        foreach ($this->cards as $card) {
            $totalValue += $card->getValue();
        }
        return $totalValue;
    }
}
