<?php

namespace App\Entity;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class BlackjackTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateBlackjack(): void
    {
        $blackjack = new Blackjack();
        $this->assertInstanceOf("\App\Entity\Blackjack", $blackjack);
    }

    /**
     * Tests setName and verify that res equals exp
     */
    public function testSetName(): void
    {
        $blackjack = new Blackjack();
        $blackjack->setName("default");
        $res = $blackjack->getName();
        $exp = "default";

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests setAccount and verify that res equals exp
     */
    public function testSetAccount(): void
    {
        $blackjack = new Blackjack();
        $blackjack->setAccount(666);
        $res = $blackjack->getAccount();

        $exp = 666;

        $this->assertEquals($res, $exp);
    }

    /**
     * Tests setNumOfHands and verify that res equals exp
     */
    public function testSetNumOfHands(): void
    {
        $blackjack = new Blackjack();
        $blackjack->setNumOfHands(1);
        $res = $blackjack->getNumOfHands();

        $exp = 1;

        $this->assertEquals($res, $exp);
    }

}
