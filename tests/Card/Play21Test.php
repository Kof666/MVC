<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Ply21.
 */
class Play21Test extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateGame(): void
    {
        $game = new Play21();
        $this->assertInstanceOf("\App\Card\Play21", $game);

        $deck = $game->getDeck();
        $this->assertIsObject($deck);

        $rounds = $game->getRounds();
        $this->assertIsInt($rounds);
        $bankRounds = $game->getBankRounds();
        $this->assertIsInt($bankRounds);
        $playerRounds = $game->getPlayerRounds();
        $this->assertIsInt($playerRounds);
    }

    /**
     * Tests getBankScore and verify that function returns int
     */
    public function testGetBankScore()
    {
        $game = new Play21();
        $res = $game->getBankScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests setBankScore and verify that function returns int
     */
    public function testSetBankScore()
    {
        $game = new Play21();
        $res = $game->setBankScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests getPlayerScore and verify that function returns int
     */
    public function testGetPlayerScore()
    {
        $game = new Play21();
        $res = $game->getPlayerScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests setPlayerScore and verify that function returns int
     */
    public function testSetPlayerScore()
    {
        $game = new Play21();
        $res = $game->setPlayerScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests getBankRounds and verify that function returns int
     */
    public function testGetBankRounds()
    {
        $game = new Play21();
        $res = $game->getBankRounds();

        $this->assertIsInt($res);
    }

    /**
     * Tests setBankRounds and verify that function
     * works by using it once and expect int 1 (default = 0)
     */
    public function testSetBankRounds()
    {
        $game = new Play21();
        $game->setBankRounds();
        $res = $game->getBankRounds();
        $exp = 1;

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests getPlayerRounds and verify that function returns int
     */
    public function testGetPlayerRounds()
    {
        $game = new Play21();
        $res = $game->getPlayerRounds();

        $this->assertIsInt($res);
    }

    /**
     * Tests setPlayerRounds and verify that function
     * works by using it once and expect int 1 (default = 0)
     */
    public function testSetPlayerRounds()
    {
        $game = new Play21();
        $game->setPlayerRounds();
        $res = $game->getPlayerRounds();
        $exp = 1;

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests getDeck and verify that function
     * returns an object
     */
    public function testGetDeck()
    {
        $game = new Play21();
        $res = $game->getDeck();

        $this->assertIsObject($res);
    }

    /**
     * Tests getRounds and verify that function returns int
     */
    public function testGetRounds()
    {
        $game = new Play21();
        $res = $game->getRounds();

        $this->assertIsInt($res);
    }

    /**
     * Tests setRounds and verify that function
     * works by using it once and expect int 2 (default = 1)
     */
    public function testSetRounds()
    {
        $game = new Play21();
        $game->setRounds();
        $res = $game->getRounds();
        $exp = 2;

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests draw and verify that function returns object
     */
    public function testDraw()
    {
        $game = new Play21();
        $res = $game->draw();

        $this->assertIsObject($res);
    }

    /**
     * Tests playerHand and verify that function returns object
     */
    public function testPlayerHand()
    {
        $game = new Play21();
        $res = $game->playerHand();

        $this->assertIsArray($res);
    }

    /**
     * Tests playerDraw and verify that function returns object
     */
    public function testPlayerDraw()
    {
        $game = new Play21();
        $res = $game->playerDraw();

        $this->assertIsArray($res);
    }

    /**
     * Tests bankHand and verify that function returns object
     */
    public function testBankHand()
    {
        $game = new Play21();
        $res = $game->bankHand();

        $this->assertIsArray($res);
    }

    /**
     * Tests bankDraw and verify that function returns object
     */
    public function testBankDraw()
    {
        $game = new Play21();
        $res = $game->bankDraw();

        $this->assertIsArray($res);
    }

    /**
     * Tests clearHands and verify that function returns object
     */
    public function testclearHands()
    {
        $game = new Play21();
        $game->playerDraw();
        $pHand = $game->playerHand();
        $game->bankDraw();
        $bHand = $game->bankHand();
        $game->setPlayerScore();
        $game->setBankScore();

        $this->assertIsArray($pHand);
        $this->assertIsArray($bHand);

        $game->clearHands();
        $res = array();
        $exp = $game->playerHand();
        $this->assertEquals($res, $exp);
        $exp = $game->bankHand();
        $this->assertEquals($res, $exp);
    }
}
