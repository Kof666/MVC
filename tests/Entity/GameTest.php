<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class GameTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateBlackjack(): void
    {
        $game = new Game();
        $this->assertInstanceOf("\App\Entity\Game", $game);
    }

    /**
     * Tests setName and verify that res equals exp
     */
    public function testGetId(): void
    {
        $game = new Game();
        $res = $game->getId();

        $this->assertEmpty($res);
    }

    /**
     * Tests get and set for playerId and verify that res equals exp
     */
    public function testPlayerId(): void
    {
        $game = new Game();
        $res = 666;
        $game->setPlayerId($res);
        $exp = $game->getPlayerId();

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests get and set for bankHand and verify that res equals exp
     */
    public function testBankHand(): void
    {
        $game = new Game();
        $res = array("A ♥");
        $game->setBankHand($res);
        $exp = $game->getBankHand();

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests get and set for PlayerHandOne and verify that res equals exp
     */
    public function testPlayerHandOne(): void
    {
        $game = new Game();
        $res = array("A ♥");
        $game->setPlayerHandOne($res);
        $exp = $game->getPlayerHandOne();

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests get and set for PlayerHandTwo and verify that res equals exp
     */
    public function testPlayerHandTwo(): void
    {
        $game = new Game();
        $res = array("A ♥");
        $game->setPlayerHandTwo($res);
        $exp = $game->getPlayerHandTwo();

        $this->assertEquals($res, $exp);
    }

    /**
    * Tests get and set for PlayerHandThree and verify that res equals exp
    */
   public function testPlayerHandThree(): void
   {
       $game = new Game();
       $res = array("A ♥");
       $game->setPlayerHandThree($res);
       $exp = $game->getPlayerHandThree();

       $this->assertEquals($res, $exp);
   }

}