<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateCard(): void
    {
        $card = new Card();
        $this->assertInstanceOf("\App\Card\Card", $card);
    }

    /**
     * Tests getValue and verify that method returns int
     */
    public function testGetValue(): void
    {
        $card1 = new Card('J', "hearts");
        $card2 = new Card('Q', "hearts");
        $card3 = new Card('K', "hearts");
        $card4 = new Card('A', "hearts");
        $card5 = new Card(3, "hearts");
        $res1 = $card1->getValue();
        $res2 = $card2->getValue();
        $res3 = $card3->getValue();
        $res4 = $card4->getValue();
        $res5 = $card5->getValue();


        $this->assertIsInt($res1);
        $this->assertIsInt($res2);
        $this->assertIsInt($res3);
        $this->assertIsInt($res4);
        $this->assertIsInt($res5);

    }

    /**
     * Tests getSuit and verify that method returns string
     */
    public function testGetSuit(): void
    {
        $card = new Card('J', "hearts");

        $res = $card->getSuit();
        $this->assertIsString($res);
    }
}
