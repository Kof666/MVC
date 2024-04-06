<?php

namespace App\Card;

/**
 * A simple Card
 */
class Card
{
    /**
     * @var integer value   the value of the dice
     */
    protected $card;


    /**
     * Constructor to initiate the dice
     */
    public function __construct()
    {
        $this->card = null;
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
        return $this->card;
    }

    public function setCard(string $card)
    {
        $this->card = $card;

        return $this->card;
    }

    /**
     * Value as string
     *
     * @return string value as string
     */
    public function getAsString()
    {
        return "[{$this->card}]";
    }
}
