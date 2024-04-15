<?php

namespace App\Card;

/**
 * A simple card
 */
class Card
{
    /**
     * @var integer value   the value of the card
     * @var string suit     the suit of the card
     */
    protected $value;
    protected $suit;

    /**
     * Constructor to initiate a card
     */
    public function __construct($value, $suit)
    {
        $this->value = $value;
        $this->suit = $suit;
    }

    /**
     * To get the value of the card
     *
     * @return integer value    the value of the card
     */
    public function getValue()
    {
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
