<?php

namespace App\Card;

/**
 * A graphic class to that extends the class Card
 */
class CardGraphic extends Card
{
    /**
     * Give you a string representation of the cards value and suite
     *
     * @return string   string of value and suit as one string
     */
    public function cardAsString()
    {
        return $this->getAsString();
    }

    /**
     * A graphic representation of the suite of the card
     *
     * @return string   of the suite of the card
     */
    public function getGraphicSuit()
    {
        switch ($this->suit) {
            case 'Hearts':
                return '♥';
            case 'Diamonds':
                return '♦';
            case 'Clubs':
                return '♣';
            case 'Spades':
                return '♠';
            default:
                return 'unknown suit';
        }
    }

    /**
     * A graphic representation of the suite and the value of the card as one string
     *
     * @return string   of the suite and value of the card
     */
    public function getAsString()
    {
        switch ($this->suit) {
            case 'Hearts':
                return $this->value . ' ' . '♥';
            case 'Diamonds':
                return $this->value . ' ' . '♦';
            case 'Clubs':
                return $this->value . ' ' . '♣';
            case 'Spades':
                return $this->value . ' ' . '♠';
            default:
                return $this->value . ' ' . 'unknown suit';
        }
    }

    public function getValue()
    {
        switch ($this->value) {
            case 'J':
                return 10;
            case 'Q':
                return 10;
            case 'K':
                return 10;
            case 'A':
                return 10;
        }
        return $this->value;
    }
}
