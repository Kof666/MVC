<?php

namespace App\Dice;

/**
 * A simple dice
 */
class Dice
{
    /**
     * @var integer value   the value of the dice
     */
    protected $value;

    /**
     * Constructor to initiate the dice
     */
    public function __construct()
    {
        $this->value = null;
    }

    /**
     * Roll the dice
     *
     * @return integer that gives a value between one and six
     */
    public function roll()
    {
        $this->value = random_int(1, 6);
        return $this->value;
    }

    /**
     * Get value of the dice
     *
     * @return value of the dice
     */
    public function getValue()
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
