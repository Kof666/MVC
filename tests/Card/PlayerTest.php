<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class PlayerTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreatePlayer(): void
    {
        $player = new Player();
        $this->assertInstanceOf("\App\Card\Player", $player);
    }

    /**
     * Tests getName and verify that method returns mixed
     */
    public function testGetName(): void
    {
        $player = new Player('name');
        $res = $player->getName();

        $this->assertIsString($res);
    }

    /**
     * Tests setName and verify that res equals exp
     */
    public function testSetName(): void
    {
        $player = new Player();
        $player->setName("default");
        $res = $player->getName();
        $exp = "default";

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests getAccount and verify that method returns int
     */
    public function testGetAccount(): void
    {
        $player = new Player("Name", 666, 3);

        $res = $player->getAccount();
        $this->assertIsInt($res);
    }

    /**
     * Tests setAccount and verify that res equals exp
     */
    public function testSetAccount(): void
    {
        $player = new Player();
        $player->setAccount(666);
        $res = $player->getAccount();
        $exp = 666;

        $this->assertEquals($res, $exp);
    }


    /**
     * Test bet and verify that $bet1, $bet2, $bet3 is equal
     */
    public function testBet(): void
    {
        $player = new Player("Name", 666, 3);

        $player->bet(11, 22, 33);
        $res1 = $player->getBet(0);
        $res2 = $player->getBet(1);
        $res3 = $player->getBet(2);
        $exp1 = 11;
        $exp2 = 22;
        $exp3 = 33;

        $this->assertEquals($res1, $exp1);
        $this->assertEquals($res2, $exp2);
        $this->assertEquals($res3, $exp3);
    }

    /**
     * Tet getBets and verify that its array
     */
    public function testGetBets(): void
    {
        $player = new Player("Name", 666, 3);
        $res = $player->getBets();

        $this->assertIsArray($res);
    }

    /**
     * Tet getBet and verify that its equal
     */
    public function testGetBet(): void
    {
        $player = new Player("Name", 666, 3);
        $player->bet(11, 22, 33);
        $res = $player->getBet(1);
        $exp = 22;

        $this->assertEquals($res, $exp);
    }

    /**
     * Test clearBets and verify that assert its empty
     */
    public function testclearBets(): void
    {
        $player = new Player("Name", 666, 3);
        $player->bet(11, 22, 33);
        $player->clearBets();
        $res = $player->getBets();

        $this->assertEmpty($res);
    }

    /**
     * Test addAccount and verify that its equal
     */
    public function testAddAccount(): void
    {
        $player = new Player("Name", 666, 3);
        $exp = 666;
        $this->assertEquals($exp, $player->getAccount());
    }

    /**
     * Test getNumOfHands and verify that its int
     */
    public function testGetNumOfHands(): void
    {
        $player = new Player("Name", 666, 3);
        $res = $player->getNumOfHands();

        $this->assertIsInt($res);
    }

    /**
     * Test setNumOfHands and verify that its Equal
     */
    public function testSetNumOfHands(): void
    {
        $player = new Player("Name", 666, 3);
        $res = $player->getNumOfHands();
        $exp = 3;

        $this->assertEquals($res, $exp);
    }
}
