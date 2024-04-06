<?php

namespace App\Card;

/**
 * A simple Card
 */
class DeckOfCards
{
    /**
     * @var integer deckOfCards   the value of the deck of cards
     */
    private $deckOfCards = [];
    private $hearts = [];
    private $spades = [];
    private $diamonds = [];
    private $clubs = [];

    /**
     * Constructor to initiate the dice
     */
    public function __construct()
    {
        //construct a deck of 52 cards
        $this->value = null;
    }

    // /**
    //  * Roll the dice
    //  *
    //  * @return integer that gives a value between one and six
    //  */
    // public function roll()
    // {
    //     $this->value = random_int(1, 6);
    //     return $this->value;
    // }

    /**
     * Get value of the dice
     *
     * @return the value of the dice
     */
    public function getCard()
    {
        return $this->value;
    }

    /**
     * Value as string
     *
     * @return string value as string
     */
    public function getAsString()
    {
        return "[{$this->value}]";
    }
}