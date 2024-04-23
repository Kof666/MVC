<?php

namespace App\Card;

class CardHand
{
    /**
     * @var array cards
     */
    private array $cards;

    public function __construct()
    {
        $this->cards = [];
    }

    public function addCard(Card $card)
    {
        $this->cards[] = $card;

        return $this->cards;
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
