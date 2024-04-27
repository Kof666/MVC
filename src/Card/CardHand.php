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

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    public function getTotalValue(): int
    {
        $totalValue = 0;
        foreach ($this->cards as $card) {
            $totalValue += $card->getValue();
        }
        return $totalValue;
    }
}
