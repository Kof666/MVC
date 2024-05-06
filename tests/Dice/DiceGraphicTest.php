<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Dice.
 */
class DiceGraphicTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateDiceGraphic(): void
    {
        $die = new DiceGraphic();
        $this->assertInstanceOf("\App\Dice\DiceGraphic", $die);

        $die->roll();
        $res = $die->getAsString();
        $this->assertNotEmpty($res);
    }

    /**
     * Create a mocked object that always returns 6.
     */
    // public function testStubRollDiceLastRoll(): void
    // {
    //     // Create a stub for the Dice class.
    //     $stub = $this->createMock(Dice::class);

    //     // Configure the stub.
    //     $stub->method('roll')
    //         ->willReturn(6);

    //     $res = $stub->roll();
    //     $exp = 6;
    //     $this->assertEquals($exp, $res);
    // }
}
