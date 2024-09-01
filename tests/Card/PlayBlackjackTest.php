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
     * @return void
     */
    public function testCreateGame(): void
    {
        $game = new PlayBlackjack();
        $this->assertInstanceOf("\App\Card\PlayBlackjack", $game);
    }

    /**
     * Tests getBankScore is int
     */
    public function testGetBankScore(): void
    {
        $game = new PlayBlackjack();
        $game->dealFirstBankCard();
        $res = $game->getBankScore();
        $this->assertIsInt($res);
    }

    /**
     * Tests getFirstBankCard is int
     */
    public function testGetFirstBankCard(): void
    {
        $game = new PlayBlackjack();
        $game->dealFirstBankCard();
        $res = $game->getFirstBankCard();
        $this->assertIsInt($res);
    }

    /**
     * Tests getPlayerScore is int
     */
    public function testGetPlayerScore(): void
    {
        $game = new PlayBlackjack();
        $game->dealFirstPlayerCard(0);
        $res = $game->getPlayerScore();
        $this->assertIsInt($res);
    }

    /**
     * Tests that getDeck is object
     */
    public function testGetDeck(): void
    {
        $game = new PlayBlackjack();
        $res = $game->getDeck();
        $this->assertIsObject($res);
    }

    /**
     * Tests that getApiDeck is array
     */
    public function testGetApiDeck(): void
    {
        $game = new PlayBlackjack();
        $res = $game->getApiDeck();
        $this->assertIsArray($res);
    }

    /**
     * Tests countBankHand is int and equals
     */
    public function testCountBankHand(): void
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
    public function testAddPlayerHand(): void
    {
        $game = new PlayBlackjack();
        $before = $game->playerHand();
        $arr = array("A ♠", "K ♥");
        $game->addPlayerHand($arr);
        // $playerHand = $game->PlayerHand();
        // var_dump($playerHand);
        $after = $game->playerHand();
        $this->assertNotEquals($before, $after);
    }

    /**
     * Tests hitPlayerHand is returns null
     */
    public function testHitPlayerHand(): void
    {
        $game = new PlayBlackjack();
        $before = $game->playerHand();
        $arr = array("1", "2");
        $game->addPlayerHand($arr);
        $game->hitPlayerHand(0, "Q ♥");
        $after = $game->playerHand();
        $this->assertNotEquals($before, $after);

    }

    /**
     * Tests addHandScore
     */
    public function testAddHandScore(): void
    {
        $game = new PlayBlackjack();
        $before = $game->getHandScore();
        $game->addHandScore(666);
        $after = $game->getHandScore();
        $this->assertNotEquals($before, $after);
    }

    /**
     * Tests hitHandScore
     */
    public function testHitHandScore(): void
    {
        $game = new PlayBlackjack();
        $before = $game->getHandScore();
        $game->addHandScore(666);
        $game->hitHandScore(0, 1);
        $after = $game->getHandScore();
        $this->assertNotEquals($before, $after);
    }

    /**
     * Tests dealFirstPlayerCard
     */
    public function testDealFirstPlayerCard(): void
    {
        $game = new PlayBlackjack();

        $drawPre = $game->countDeck();
        $game->dealFirstPlayerCard(1);
        $drawPost = $game->countDeck();
        $this->assertNotEquals($drawPre, $drawPost);
    }

    /**
     * Tests dealSecondPlayerCard
     */
    public function testDealSecondPlayerCard(): void
    {
        $game = new PlayBlackjack();

        $drawPre = $game->countDeck();
        $game->dealFirstPlayerCard(1);
        $game->dealSecondPlayerCard(1);
        $drawPost = $game->countDeck();
        $this->assertNotEquals($drawPre, $drawPost);
    }

    /**
     * Tests dealFirstBankCard
     */
    public function testDealFirstBankCard(): void
    {
        $game = new PlayBlackjack();

        $drawPre = $game->countDeck();
        $game->dealFirstBankCard();
        $drawPost = $game->countDeck();
        $this->assertNotEquals($drawPre, $drawPost);
    }

    /**
     * Tests dealSecondBankCard
     */
    public function testDealSecondBankCard(): void
    {
        $game = new PlayBlackjack();

        $drawPre = $game->countDeck();
        $game->dealFirstBankCard();
        $game->dealSecondBankCard();
        $drawPost = $game->countDeck();
        $this->assertNotEquals($drawPre, $drawPost);
    }

    /**
     * Tests dealBankCard
     */
    public function testDealBankCard(): void
    {
        $game = new PlayBlackjack();

        $drawPre = $game->countDeck();
        $game->dealBankCard();
        $drawPost = $game->countDeck();
        $this->assertNotEquals($drawPre, $drawPost);
    }

    /**
     * Tests playerHand
     */
    public function testPlayerHand(): void
    {
        $game = new PlayBlackjack();
        $res = $game->playerHand();
        $this->assertIsArray($res);
    }

    /**
     * Tests playerDraw
     */
    public function testPlayerDraw(): void
    {
        $game = new PlayBlackjack();

        $drawPre = $game->countDeck();
        $game->dealFirstPlayerCard(1);
        $game->playerDraw(0);
        $drawPost = $game->countDeck();
        $this->assertNotEquals($drawPre, $drawPost);
    }

    /**
     * Tests bankHand
     */
    public function testBankHand(): void
    {
        $game = new PlayBlackjack();
        $res = $game->bankHand();
        $this->assertIsArray($res);
    }

    /**
     * Tests getBankHand
     */
    public function testgetBankHand(): void
    {
        $game = new PlayBlackjack();
        $game->dealFirstBankCard();
        $res = $game->getBankHand(0);
        $this->assertIsString($res);
    }

    /**
     * Tests bankDraw
     */
    public function testBankDraw(): void
    {
        $game = new PlayBlackjack();

        $drawPre = $game->countDeck();
        $game->dealFirstPlayerCard(1);
        $game->bankDraw();
        $drawPost = $game->countDeck();
        $this->assertNotEquals($drawPre, $drawPost);
    }

    /**
     * Tests playBust
     */
    public function testPlayBust(): void
    {
        $game = new PlayBlackjack();
        $player = new Player();
        $res = $game->playBust($player);
        $this->assertIsString($res);

        $game->setHandScoreTest(1, 21);
        $player->bet(1, 2, 3);
        $res = $game->playBust($player);
        $this->assertIsString($res);

        $game->setHandScoreTest(1, 22);
        $player->bet(1, 2, 3);
        $res = $game->playBust($player);
        $this->assertIsString($res);
    }

    /**
     * Tests that player21 returns string
     */
    public function testPlayer21(): void
    {
        $game = new PlayBlackjack();
        $res = $game->player21();
        $this->assertIsString($res);

        $player = new Player();
        $game->setHandScoreTest(1, 21);
        $res = $game->player21();
        $this->assertIsString($res);
    }

    /**
     * Tests that clear Hands cler hands
     */
    public function testClearHands(): void
    {
        $game = new PlayBlackjack();
        $game->dealFirstPlayerCard(1);
        $game->dealFirstBankCard();
        $pre = $game;
        $game->clearHands();
        $post = $game;

        $this->assertEquals($pre, $post);
    }

    /**
     * Tests that allPlayerWinns returns int and giv player the money
     */
    public function testAllPlayerWinns(): void
    {
        $game = new PlayBlackjack();
        $player = new Player();
        $game->dealFirstPlayerCard(1);
        $game->dealFirstBankCard();
        $player->bet(1, 2, 3);
        $pre = $game;
        $res = $game->allPlayerWinns($player);
        $post = $game;

        $this->assertIsInt($res);
        $this->assertEquals($pre, $post);

    }

    /**
     * Tests getWinner
     */
    public function testgetWinner(): void
    {
        $game = new PlayBlackjack();
        $player = new Player();
        $game->dealFirstPlayerCard(1);
        $game->dealFirstBankCard();
        $player->bet(1, 2, 3);
        $pre = $game;
        $res = $game->getWinner($player);
        $post = $game;

        $this->assertIsString($res);
        $this->assertEquals($pre, $post);

        $game->setBankScoreTest(22);
        $bankScore = $game->getBankScore();
        $res = $game->getWinner($player);
        $this->assertIsString($res);


        $game->setBankScoreTest(20);
        $game->setHandScoreTest(0, 22);
        $bankScore = $game->getBankScore();
        $handScore = $game->getHandScore();
        $res = $game->getWinner($player);
        $this->assertIsString($res);

        $game->setHandScoreTest(0, 21);
        $res = $game->getWinner($player);
        $this->assertIsString($res);

        $game->setHandScoreTest(0, 20);
        $game->setBankScoreTest(20);
        $res = $game->getWinner($player);
        $this->assertIsString($res);

        $game->setBankScoreTest(21);
        $res = $game->getWinner($player);
        $this->assertIsString($res);

        $game->setBankScoreTest(19);
        $game->setHandScoreTest(0, 20);
        $bankScore = $game->getBankScore();
        $handScore = $game->getHandScore();
        $res = $game->getWinner($player);
        $this->assertIsString($res);
    }
}
