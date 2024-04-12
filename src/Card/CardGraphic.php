<?php

namespace App\Card;

class CardGraphic extends Card 
{

    // public function __construkt($gValue, $gSuit)
    // {
    //     parent::__construct($gValue, $gSuite ?? parent::getSuit());
    // }


  public function getAsString() {
    switch ($this->suit) {
        case 'hearts':
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


    // public function __construct($value, $suit)
    // {
    //     parent::__construct($value, $suit);
    // }

    // public function getAsString() {
    //     $suitSymbol = '♦';

    //     switch (parent::suite) {
    //         case 'Hearts':
    //             $sutieSymbol = '♥';
    //         case 'Diamonds':
    //             return '♦';
    //         case 'Clubs':
    //             return '♣';
    //         case 'Spades':
    //             return '♠';
    //         default:
    //             return 'default';
    //     }




    //     return $this->value . ' ' . $suitSymbol;
    // }

    // protected function getSuitSymbol() {

    //     return '♦';
    //     // switch ($this->suit) {
    //     //     case 'Hearts':
    //     //         return '♥';
    //     //     case 'Diamonds':
    //     //         return '♦';
    //     //     case 'Clubs':
    //     //         return '♣';
    //     //     case 'Spades':
    //     //         return '♠';
    //     //     default:
    //     //         return '';
    //     // }
    // }



    // protected $value;
    // protected $suite;

    // private $representation = [
    //     '♥',
    //     '♦',
    //     '♣',
    //     '♠'
    // ];

    // public function __construct($value, $suit)
    // {
    //     parent::__construct($value, $suit);
    // }

    // public function getAsString(): string
    // {
    //     return $this->suite;
    // }
}