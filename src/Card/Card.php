<?php

namespace App\Card;

/**
 * A simple card
 */
class Card
{
    protected $value;
    protected $suit;

    public function __construct($value, $suit)
    {
        $this->value = $value;
        $this->suit = $suit;
    }

    public function __toString()
    {
        return $this->value . ' of ' . $this->suit;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getSuit()
    {
        return $this->suit;
    }
}
