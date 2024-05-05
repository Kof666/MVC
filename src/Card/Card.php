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
    public function __construct(mixed $value = 0, string $suit = "")
    {
        $this->value = $value;
        $this->suit = $suit;
    }

    /**
     * To get the value of the card
     *
     * @return int value    the value of the card
     */
    public function getValue(): int
    {
        switch ($this->value) {
            case 'J':
                return 11;
            case 'Q':
                return 12;
            case 'K':
                return 13;
            case 'A':
                return 14;
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
