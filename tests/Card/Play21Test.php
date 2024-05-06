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
    public function testGetBankScore(): void
    {
        $game = new Play21();
        $res = $game->getBankScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests setBankScore and verify that function returns int
     */
    public function testSetBankScore(): void
    {
        $game = new Play21();
        $res = $game->setBankScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests getPlayerScore and verify that function returns int
     */
    public function testGetPlayerScore(): void
    {
        $game = new Play21();
        $res = $game->getPlayerScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests setPlayerScore and verify that function returns int
     */
    public function testSetPlayerScore(): void
    {
        $game = new Play21();
        $res = $game->setPlayerScore();

        $this->assertIsInt($res);
    }

    /**
     * Tests getBankRounds and verify that function returns int
     */
    public function testGetBankRounds(): void
    {
        $game = new Play21();
        $res = $game->getBankRounds();

        $this->assertIsInt($res);
    }

    /**
     * Tests setBankRounds and verify that function
     * works by using it once and expect int 1 (default = 0)
     */
    public function testSetBankRounds(): void
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
    public function testGetPlayerRounds(): void
    {
        $game = new Play21();
        $res = $game->getPlayerRounds();

        $this->assertIsInt($res);
    }

    /**
     * Tests setPlayerRounds and verify that function
     * works by using it once and expect int 1 (default = 0)
     */
    public function testSetPlayerRounds(): void
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
    public function testGetDeck(): void
    {
        $game = new Play21();
        $res = $game->getDeck();

        $this->assertIsObject($res);
    }

    /**
     * Tests getRounds and verify that function returns int
     */
    public function testGetRounds(): void
    {
        $game = new Play21();
        $res = $game->getRounds();

        $this->assertIsInt($res);
    }

    /**
     * Tests setRounds and verify that function
     * works by using it once and expect int 2 (default = 1)
     */
    public function testSetRounds(): void
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
    public function testDraw(): void
    {
        $game = new Play21();
        $res = $game->draw();

        $this->assertIsObject($res);
    }

    /**
     * Tests playerHand and verify that function returns object
     */
    public function testPlayerHand(): void
    {
        $game = new Play21();
        $res = $game->playerHand();

        $this->assertIsArray($res);
    }

    /**
     * Tests playerDraw and verify that function returns object
     */
    public function testPlayerDraw(): void
    {
        $game = new Play21();
        $res = $game->playerDraw();

        $this->assertIsArray($res);
    }

    /**
     * Tests bankHand and verify that function returns object
     */
    public function testBankHand(): void
    {
        $game = new Play21();
        $res = $game->bankHand();

        $this->assertIsArray($res);
    }

    /**
     * Tests bankDraw and verify that function returns object
     */
    public function testBankDraw(): void
    {
        $game = new Play21();
        $res = $game->bankDraw();

        $this->assertIsArray($res);
    }

    /**
     * Tests clearHands and verify that function returns object
     */
    public function testclearHands(): void
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

    /**
     * tests getWinner when player gets 21
     */
    public function testPlayerWinnsBy21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(21);
        $game->setbankScoreTest(20);
        $res = $game->getWinner();

        $exp = "Player winns!!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests getWinner when player gets over 21
     */
    public function testPlayerOver21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(22);
        $game->setbankScoreTest(20);
        $res = $game->getWinner();

        $exp = "Player bust and loose!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests getWinner when player and bank is equal
     */
    public function testPlayerAndBankIsEqual(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(20);
        $game->setbankScoreTest(20);
        $res = $game->getWinner();

        $exp = "Even, so house winns!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests getWinner when bank gets 21
     */
    public function testBankWinnsBy21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(20);
        $game->setbankScoreTest(21);
        $res = $game->getWinner();

        $exp = "House winns!!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests getWinner when bank gets over 21
     */
    public function testBankOver21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(20);
        $game->setbankScoreTest(22);
        $res = $game->getWinner();

        $exp = "House bust and loose!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests getWinner when bank higher than player and lower than 21
     */
    public function testBankHigherThanPlayerAndLowerThan21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(19);
        $game->setbankScoreTest(20);
        $res = $game->getWinner();

        $exp = "House wins";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests bustOrWinn() player get 21
     */
    public function testBustOrWinnPlayer21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(21);
        $game->setbankScoreTest(20);
        $res = $game->bustOrWinn();

        $exp = "Player winns!!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests bustOrWinn() player over 21
     */
    public function testBustOrWinnPlayerOver21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(22);
        $game->setbankScoreTest(20);
        $res = $game->bustOrWinn();

        $exp = "Player bust and loose!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests bustOrWinn() bank get 21
     */
    public function testBustOrWinnBank21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(20);
        $game->setbankScoreTest(21);
        $res = $game->bustOrWinn();

        $exp = "House winns!!";
        $this->assertEquals($res, $exp);

    }

    /**
     * tests bustOrWinn() bank over 21
     */
    public function testBustOrWinnBankOver21(): void
    {
        $game = new Play21();
        $game->setPlayerScoreTest(20);
        $game->setbankScoreTest(22);
        $res = $game->bustOrWinn();

        $exp = "House bust and loose!";
        $this->assertEquals($res, $exp);

    }
}
