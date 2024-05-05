<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCards.
 */
class DeckOfCardsTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateCard(): void
    {
        $deck = new DeckOfCards();
        $this->assertInstanceOf("\App\Card\DeckOfCards", $deck);
    }

    /**
     * Tests getDeck and verify that function returns an arry
     */
    public function testGetDeck(): void
    {
        $deck = new DeckOfCards();
        $res = $deck->getDeck();

        $this->assertIsArray($res);
        $this->assertInstanceOf("\App\Card\DeckOfCards", $deck);
    }

    /**
     * Tests shuffle and verify that function returns an array
     * test with equals that it has been shuffled
     */
    public function testShuffle(): void
    {
        $resDeck = new DeckOfCards();
        $sDeck = new DeckOfCards();
        $resSdeck = $sDeck->shuffle();

        $this->assertNotEquals($resDeck, $resSdeck);
        $this->assertIsArray($resSdeck);
        $this->assertInstanceOf("\App\Card\DeckOfCards", $sDeck);
    }

    /**
     * Tests shuffle and verify that function returns an object or null
     */
    public function testDraw(): void
    {
        $deck = new DeckOfCards();
        $res = $deck->draw();

        for ($i = 0; $i < 53; $i++) {
            $resNull = $deck->draw();
        }

        $this->assertIsObject($res);
        $this->assertEquals($resNull, null);
    }

    /**
     * Tests getLast and verify that function returns an array
     */
    public function testGetLast(): void
    {
        $deck = new DeckOfCards();
        $res = $deck->getLast();

        $this->assertIsArray($res);
    }

    /**
     * Tests getSuit and verify that function returns array
     */
    public function testGetSuit(): void
    {
        $deck = new DeckOfCards();
        $res = $deck->getSuit();

        $this->assertIsArray($res);
    }

    /**
     * Tests cardCount and verify that function returns int
     */
    public function testCardCount(): void
    {
        $deck = new DeckOfCards();
        $res = $deck->cardCount();

        $this->assertIsInt($res);
    }

    /**
     * Tests getAsString and verify that function returns array
     */
    public function testGetAsString(): void
    {
        $deck = new DeckOfCards();
        $res = $deck->getAsString();

        $this->assertIsArray($res);
    }
}
