<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Dice.
 */
class DiceHandTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateDiceHand(): void
    {
        $hand = new DiceHand();
        $this->assertInstanceOf("\App\Dice\DiceHand", $hand);
    }

    /**
     * tests getValues()
     */
    public function testgetValues(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $res = $hand->getValues();

        $this->assertIsArray($res);
    }

    /**
     * Create a mocked object that always returns 6.
     */
    public function testStubRollDiceLastRoll(): void
    {
        // Create a stub for the Dice class.
        $stub = $this->createMock(Dice::class);

        // Configure the stub.
        $stub->method('roll')
            ->willReturn(6);

        $res = $stub->roll();
        $exp = 6;
        $this->assertEquals($exp, $res);
    }

    /**
     * tests getNumberDices()
     */
    public function testGetNumberDices(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $res = $hand->getNumberDices();

        $exp = 1;

        $this->assertEquals($res, $exp);
    }

    /**
     * tests roll()
     */
    public function testRoll(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $hand->roll();
        $res = $hand->getNumberDices();

        $exp = 1;

        $this->assertEquals($res, $exp);
    }

    /**
     * tests getString()
     */
    public function testGetString(): void
    {
        $hand = new DiceHand();
        $die = new Dice();
        $hand->add($die);
        $hand->roll();

        $res = $hand->getString();

        $this->assertNotEmpty($res);
    }
}
