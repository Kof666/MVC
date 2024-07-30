<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Ply21.
 *
 * @SuppressWarnings(PHPMD)
 */
class PlayBlackjackTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateGame(): void
    {
        $game = new PlayBlackjack();
        $this->assertInstanceOf("\App\Card\PlayBlackjack", $game);
    }

    /**
     * Tests getBankScore is int
     */
    public function testGetBankScore()
    {
        $game = new PlayBlackjack();
        $game->dealFirstBankCard();
        $res = $game->getBankScore();
        $this->assertIsInt($res);
    }

    /**
     * Tests getFirstBankCard is int
     */
    public function testGetFirstBankCard()
    {
        $game = new PlayBlackjack();
        $game->dealFirstBankCard();
        $res = $game->getFirstBankCard();
        $this->assertIsInt($res);
    }

    /**
     * Tests getPlayerScore is int
     */
    public function testGetPlayerScore()
    {
        $game = new PlayBlackjack();
        $game->dealFirstPlayerCard(0);
        $res = $game->getPlayerScore();
        $this->assertIsInt($res);
    }

    /**
     * Tests that getDeck is object
     */
    public function testGetDeck()
    {
        $game = new PlayBlackjack();
        $res = $game->getDeck();
        $this->assertIsObject($res);
    }

    /**
     * Tests that getApiDeck is array
     */
    public function testGetApiDeck()
    {
        $game = new PlayBlackjack();
        $res = $game->getApiDeck();
        $this->assertIsArray($res);
    }

    /**
     * Tests countBankHand is int and equals
     */
    public function testCountBankHand()
    {
        $game = new PlayBlackjack();
        $game->dealFirstBankCard();
        $res = $game->countBankHand();
        $exp = 1;
        $this->assertIsInt($res);
        $this->assertEquals($res, $exp);
    }

    /**
     * Tests addPlayerHand is returns null
     */
    public function testAddPlayerHand()
    {
        $game = new PlayBlackjack();
        $arr = array("1", "2");
        $res = $game->addPlayerHand($arr);
        $this->assertNull($res);
    }
}
