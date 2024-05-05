<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardGraphic.
 */
class CardGraphicTest extends TestCase
{
    /**
     * Tests getAsString and verify that function returns string
     */
    public function testcardAsString(): void
    {
        $card = new CardGraphic('1', 'hearts');
        $res = $card->cardAsString();
        $this->assertIsString($res);
    }

    /**
     * Tests getGraphicSuit and verify that function returns string
     */
    public function testGetGraphicSuit(): void
    {
        $card1 = new CardGraphic('A', "Hearts");
        $card2 = new CardGraphic('A', "Diamonds");
        $card3 = new CardGraphic('A', "Clubs");
        $card4 = new CardGraphic('A', "Spades");
        $card5 = new CardGraphic('A', "card");

        $res1 = $card1->getGraphicSuit();
        $res2 = $card2->getGraphicSuit();
        $res3 = $card3->getGraphicSuit();
        $res4 = $card4->getGraphicSuit();
        $res5 = $card5->getGraphicSuit();

        $this->assertIsString($res1);
        $this->assertIsString($res2);
        $this->assertIsString($res3);
        $this->assertIsString($res4);
        $this->assertIsString($res5);

    }

    /**
     * Tests getGraphicSuit and verify that function returns string
     */
    public function testGetGraphicSuitEquals(): void
    {
        $card1 = new CardGraphic('A', "Hearts");
        $card2 = new CardGraphic('A', "Diamonds");
        $card3 = new CardGraphic('A', "Clubs");
        $card4 = new CardGraphic('A', "Spades");
        $card5 = new CardGraphic('A', "card");

        $res1 = $card1->getGraphicSuit();
        $res2 = $card2->getGraphicSuit();
        $res3 = $card3->getGraphicSuit();
        $res4 = $card4->getGraphicSuit();
        $res5 = $card5->getGraphicSuit();

        $exp1 = '♥';
        $exp2 = '♦';
        $exp3 = '♣';
        $exp4 = '♠';
        $exp5 = 'unknown suit';

        $this->assertEquals($res1, $exp1);
        $this->assertEquals($res2, $exp2);
        $this->assertEquals($res3, $exp3);
        $this->assertEquals($res4, $exp4);
        $this->assertEquals($res5, $exp5);
    }

    /**
     * Tests getAsString and verify that function returns string
     * using equals to test all returns from switch
     */
    public function testGetAsString(): void
    {
        $card1 = new CardGraphic('A', "Hearts");
        $card2 = new CardGraphic('A', "Diamonds");
        $card3 = new CardGraphic('A', "Clubs");
        $card4 = new CardGraphic('A', "Spades");
        $card5 = new CardGraphic('A', "card");

        $res1 = $card1->getAsString();
        $res2 = $card2->getAsString();
        $res3 = $card3->getAsString();
        $res4 = $card4->getAsString();
        $res5 = $card5->getAsString();

        $exp1 = 'A ♥';
        $exp2 = 'A ♦';
        $exp3 = 'A ♣';
        $exp4 = 'A ♠';
        $exp5 = 'A unknown suit';

        $this->assertEquals($res1, $exp1);
        $this->assertEquals($res2, $exp2);
        $this->assertEquals($res3, $exp3);
        $this->assertEquals($res4, $exp4);
        $this->assertEquals($res5, $exp5);
    }

    /**
     * Tests getValue and verify that method returns int
     */
    public function testGetValue(): void
    {
        $card1 = new CardGraphic('J', "hearts");
        $card2 = new CardGraphic('Q', "hearts");
        $card3 = new CardGraphic('K', "hearts");
        $card4 = new CardGraphic('A', "hearts");
        $card5 = new CardGraphic(3, "hearts");
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
}
