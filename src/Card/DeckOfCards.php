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
    private function initDeck()
    {
        /**
         * @var array deck      an array of cards
         * @var array suits     an array of suits
         * @var array values    an array of values
         */
        $this->deck = [];
        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

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
     * shuffles the cards in the deck
     */
    public function shuffle()
    {
        $this->initDeck();
        shuffle($this->deck);
    }

    /**
     * draw the top card of the deck
     *
     * @return string   top card in deck
     */
    public function draw()
    {
        if (empty($this->deck)) {
            return null; // Return null if no cards left in the deck
        }
        $lastDraw = array_shift($this->deck);
        return $lastDraw; // Deal the top card from the deck
    }

    public function getLast ()
    {
        return $this->lastDraw;
    }

    /**
     * get the suit of the cards in the deck
     *
     * @return array suit
     */
    public function getSuit()
    {
        $suit = [];
        foreach($this->deck as $card) {
            $suit[] = $card->getGraphicSuit();
        }
        return $suit;
    }

    /**
     * get the values of the cards in the deck
     *
     * @return array value
     */
    public function getValue()
    {
        $value = [];
        foreach($this->deck as $card) {
            $value[] = $card->getValue();
        }
        return $value;
    }

    public function cardCount()
    {
        return count($this->deck);
    }

    /**
     * get a representation of all cards in the deck
     *
     * @return array cards
     */
    public function getAsString()
    {
        $cards = [];
        foreach ($this->deck as $card) {
            $cards[] = $card->cardAsString();
        }
        return $cards;
    }
}
