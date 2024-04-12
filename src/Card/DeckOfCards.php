<?php

namespace App\Card;

class DeckOfCards
{
    private $deck;

    public function __construct()
    {
        $this->initDeck();
    }

    private function initDeck()
    {
        $this->deck = [];

        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $this->deck[] = new CardGraphic($value, $suit);
            }
        }
    }

    public function shuffle()
    {
        $this->initDeck();
        shuffle($this->deck);
    }

    public function draw()
    {
        if (empty($this->deck)) {
            return null; // Return null if no cards left in the deck
        }
        return array_shift($this->deck); // Deal the top card from the deck
    }
}
