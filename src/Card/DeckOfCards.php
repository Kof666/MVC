<?php

namespace App\Card;

class DeckOfCards
{
    private $cards;

    public function __construct() {
        $this->initDeck();
    }

    private function initDeck() {
        $this->cards = [];

        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $this->cards[] = new Card($value, $suit);
            }
        }
    }

    public function shuffle() {
        shuffle($this->cards);
    }

    public function draw() {
        if (empty($this->cards)) {
            return null; // Return null if no cards left in the deck
        }
        return array_shift($this->cards); // Deal the top card from the deck
    }
}