<?php

namespace App\Card;

use App\Dice\Dice;

class CardHand
{
    private $hand = [];

    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    // public function roll(): void
    // {
    //     foreach ($this->hand as $die) {
    //         $die->roll();
    //     }
    // }

    // public function getNumberDices(): int
    // {
    //     return count($this->hand);
    // }

    public function getCardHand(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getCard();
        }
        return $values;
    }

    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }
}
