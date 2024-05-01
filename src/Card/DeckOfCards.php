<?php

namespace App\Card;

/**
 * A class that handle the hole deck of cards
 */
class DeckOfCards
{
    /**
     * @var array deck    an array of cards, a deck of cards
     */
    private $deck;
    private $lastDraw = [];

    /**
     * Constructor to initiate a a deck of cards
     */
    public function __construct()
    {
        $this->initDeck();
    }

    /**
     * init a deck of cards
     */
    private function initDeck(): void
    {

        $this->deck = [];

        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];

        $values = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'];

        /**
         * loop that gives the array deck the values
         */
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $this->deck[] = new CardGraphic($value, $suit);
            }
        }
    }

    /**
     * get a representation of all cards in the deck
     *
     * @return array cards
     */
    public function getDeck(): array
    {

        return $this->deck;
    }

    /**
     * shuffles the cards in the deck
     *
     * @return mixed    $deck of cards
     */
    public function shuffle(): mixed
    {
        $this->initDeck();
        shuffle($this->deck);

        return $this->deck;
    }

    /**
     * draw the top card of the deck
     *
     * @return mixed   top card in deck
     */
    public function draw(): mixed
    {
        if (empty($this->deck)) {
            $lastDraw = "";
            return $lastDraw; // Return null if no cards left in the deck
        }
        $lastDraw = array_shift($this->deck);

        return $lastDraw; // Deal the top card from the deck
    }

    public function getLast(): array
    {
        return $this->lastDraw;
    }

    /**
     * get the suit of the cards in the deck
     *
     * @return array suit
     */
    public function getSuit(): array
    {
        $suit = [];
        foreach($this->deck as $card) {
            $suit[] = $card->getGraphicSuit();
        }
        return $suit;
    }

    /**
     * @return int numbers of card left in deck
     */
    public function cardCount(): int
    {
        return count($this->deck);
    }

    /**
     * get a representation of all cards in the deck
     *
     * @return array cards
     */
    public function getAsString(): array
    {
        $cards = [];
        foreach ($this->deck as $card) {
            $cards[] = $card->cardAsString();
        }
        return $cards;
    }
}
