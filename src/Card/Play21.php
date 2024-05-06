<?php

namespace App\Card;

/**
 * A game control class to play the game 21
 */
class Play21
{
    /**
     * variables that handles the score
     */

    /**
     * @var int $bankScore  handle the score of the house hand
     */
    protected int $bankScore = 0;

    /**
     * @var int $playerScore    handle the score of the players hand
     */
    protected int $playerScore = 0;

    /**
     * @var int $bankRounds handle the amount of winning rounds for the house
     */
    protected int $bankRounds = 0;

    /**
     * @var int @playerRounds  handle the amount of winning rounds for the player
     */
    protected int $playerRounds = 0;

    /**
     * @var int $round  counts the rounds of the game
     */
    protected int $rounds = 1;

    /**
     * @var mixed $deck handle the deck of cards
     */
    protected $deck = array();

    /**
     * @var array<string|int, mixed>    $draw give you the last drawn card from the deck
     */
    protected $draw = array();

    /**
     * @var array<string|int, mixed>    $playerHand   store the hand of cards for the player
     */
    protected $playerHand = array();

    /**
     * @var array<string|int, mixed>    $bankHand   store the hand ocf cards for the house
     */
    protected $bankHand = array();

    /**
     * Constructor init game by init21()
     */
    public function __construct()
    {
        $this->init21();
    }

    /**
     * init the game 21
     *
     * @param int $rounds           count the rounds
     * @param int $bankRounds       counts the winning rounds for the house
     * @param int $playerRounds     counts the winning rounds for the player
     */
    public function init21(int $rounds = 1, int $bankRounds = 0, int $playerRounds = 0): void
    {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $this->deck = $deck;
        $this->rounds = $rounds;
        $this->bankRounds = $bankRounds;
        $this->playerRounds = $playerRounds;
    }

    /**
     * Get bankScore
     * @return int $bankScore
     */
    public function getBankScore(): int
    {
        return $this->bankScore;
    }

    /**
     * Set bankScore
     *
     * @return int
     */
    public function setBankScore(): int
    {
        return array_sum($this->bankHand);
    }

    /**
     * Set bankScore for tests
     *
     */
    public function setBankScoreTest(int $score): void
    {
        $this->bankScore = $score;
    }

    /**
     * Get playerScore
     *
     * @return int $playerScore
     */
    public function getPlayerScore(): int
    {
        return $this->playerScore;
    }

    /**
     * Set playerScore for tests
     *
     */
    public function setPlayerScore(): int
    {
        return array_sum($this->playerHand);
    }

    /**
     * Set playerScore for tests
     *
     */
    public function setPlayerScoreTest(int $score): void
    {
        $this->playerScore = $score;
    }

    /**
     * Get bankRounds
     *
     * @return int $bankRounds
     */
    public function getBankRounds(): int
    {
        return $this->bankRounds;
    }

    /**
     * Set bank Rounds
     */
    public function setBankRounds(): void
    {
        $this->bankRounds++;
    }

    /**
     * Get playerRounds
     *
     * @return int $playerRounds
     */
    public function getPlayerRounds(): int
    {
        return $this->playerRounds;
    }

    /**
     * Set playerRounds
     */
    public function setPlayerRounds(): void
    {
        $this->playerRounds++;
    }

    /**
     * Get Deck of cards
     *
     * @return array<string|int, mixed> $deck
     */
    public function getDeck(): mixed
    {
        return $this->deck;
    }

    /**
     * Get Rounds
     *
     * @return int $ruonds
     */
    public function getRounds(): int
    {
        return $this->rounds;
    }

    /**
     * Set Rounds
     */
    public function setRounds(): void
    {
        $this->rounds++;
    }

    /**
     * Draws top card of the deck
     *
     * @return array<string|int, mixed> $draw
     */
    public function draw(): mixed
    {
        $draw = $this->deck->draw();
        $this->draw = $draw;
        return $draw;
    }

    /**
     * Get player Hand
     *
     * @return array<string|int, mixed> $playerHand
     */
    public function playerHand(): mixed
    {
        return $this->playerHand;
    }

    /**
     * Player draws top card of the deck and adds to playerhand
     *
     * @return array<string|int, mixed> $playerHand
     */
    public function playerdraw(): mixed
    {
        if($this->playerScore <= 21) {
            $value = 0;
            $draw = $this->deck->draw();
            $value = $value + $draw->getValue();
            // var_dump($value);
            $value = $draw->getValue();
            $this->playerScore = $this->playerScore + $value;
            if($draw) {
                $this->playerHand[] = $draw->getAsString();
            }
        }

        return $this->playerHand;
    }

    /**
     * Get Bankhand
     *
     * @return array<string|int, mixed> $bankHand
     */
    public function bankHand(): mixed
    {
        return $this->bankHand;
    }

    /**
     * @return array<string|int, string>
     */
    public function bankdraw(): array
    {
        $value = 0;
        while ($value < 17) {
            $draw = $this->deck->draw();
            $value = $value + $draw->getValue();
            // var_dump($value);
            $this->bankScore = $value;
            $this->bankHand[] = $draw->getAsString();
        }

        return $this->bankHand;
    }

    /**
     * Clear all hands and scores for house and player. use before new round
     */
    public function clearHands(): void
    {
        $this->playerHand = array();
        $this->bankHand = array();
        $this->playerScore = 0;
        $this->bankScore = 0;
    }

    /**
     * Logic to give winner of round
     *
     * @return string $str
     */
    public function getWinner(): string
    {
        $str = "";

        if ($this->getPlayerScore() > $this->getBankScore()) {
            $str = "Player wins";
            $this->setPlayerRounds();
            if($this->getPlayerScore() == 21) {
                $str = "Player winns!!";
                $this->setPlayerRounds();
            } elseif($this->getPlayerScore() > 21) {
                $str = "Player bust and loose!";
                $this->setBankRounds();
            }
        } elseif ($this->getBankScore() == $this->getPlayerScore()) {
            $str = "Even, so house winns!";
            $this->setBankRounds();
        }

        if($this->getBankScore() == 21) {
            $str = "House winns!!";
            $this->setBankRounds();
        } elseif ($this->getBankScore() > 21) {
            $str = "House bust and loose!";
            $this->setPlayerRounds();
        }

        if ($this->getBankScore() > $this->getPlayerScore() && $this->getBankScore() < 21) {
            $str = "House wins";
            $this->setBankRounds();
        }

        return $str;
    }

    /**
     * Logic to decide if burst or got 21.
     *
     * @return string $str
     */
    public function bustOrWinn(): string
    {
        $str = "";

        if($this->getPlayerScore() == 21) {
            $str = "Player winns!!";
            $this->setPlayerRounds();
        } elseif($this->getPlayerScore() > 21) {
            $str = "Player bust and loose!";
            $this->setBankRounds();
        }

        if($this->getBankScore() == 21) {
            $str = "House winns!!";
            $this->setBankRounds();
        } elseif($this->getBankScore() > 21) {
            $str = "House bust and loose!";
            $this->setPlayerRounds();
        }

        return $str;
    }

}
