<?php

namespace App\Card;

/**
 * A simple card
 */
class Card
{
    /**
     * @var mixed value   the value of the card
     * @var string suit     the suit of the card
     */
    protected mixed $value;
    protected string $suit;

    /**
     * Constructor to initiate a card
     */
    public function __construct(mixed $value, string $suit)
    {
        $this->value = $value;
        $this->suit = $suit;
    }

    /**
     * To get the value of the card
     *
     * @return int value    the value of the card
     */
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

    /**
     * To get the suit of the card
     *
     * @return string suit    the suit of the card
     */
    public function getSuit()
    {
        return $this->suit;
    }
}
