<?php

namespace App\Card;

/**
 * A game control class to play the game 21
 */
class PlayBlackjack
{
    /**
     * @var int $bankScore  handle the score of the house hand
     */
    protected int $bankScore = 0;

    /**
     * @var int $firstBankCard  value of first card of bank
     */
    protected int $firstBankCard;

    /**
     * @var int $playerScore    handle the score of the players hand
     */
    protected int $playerScore = 0;

    /**
     * @var array<string|int, mixed> $handScore    handle the score of the players hand
     */
    protected array $handScore = array();

    /**
     * @var mixed $deck handle the deck of cards
     */
    protected $deck = array();

    /**
     * @var array<string|int, mixed>    $draw give you the last drawn card from the deck
     */
    // protected $draw = array();

    /**
     * @var array<string|int, mixed>    $playerHand   store the hand of cards for the player
     */
    protected $playerHand = array();

    /**
     * @var array<string|int, mixed>    $bankHand   store the hand ocf cards for the house
     */
    protected $bankHand = array();

    // protected int $pot = 0;

    /**
     * Constructor init game by init21()
     */
    public function __construct()
    {
        $this->initBj();
    }

    /**
     * init the game Blackjack
     *
     */
    public function initBj(): void
    {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $this->deck = $deck;
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
     * Set bankScore for phpunit tests
     *
     * @param int $value  new value of bankhand
     *
     */
    public function setBankScoreTest($value): void
    {
        $this->bankScore = $value;
    }

    public function getFirstBankCard(): int
    {
        return $this->firstBankCard;
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
     * Get Deck of cards
     *
     * @return array<string|int, mixed> $deck
     */
    public function getDeck(): mixed
    {
        return $this->deck;
    }

    public function countDeck(): mixed
    {
        $res = $this->deck->cardCount();
        return $res;
    }

    public function getApiDeck(): mixed
    {
        $deck = $this->deck->getAsString();
        return $deck;
    }

    public function countBankHand(): int
    {
        return count($this->bankHand);
    }

    /**
     * @param array<string|int, mixed> $arr
     * @return void
     */
    public function addPlayerHand(array $arr): void
    {
        array_push($this->playerHand, $arr);
    }

    public function hitPlayerHand(int $num, string $str): void
    {
        array_push($this->playerHand[$num], $str);
    }

    public function addHandScore(int $score): void
    {
        array_push($this->handScore, $score);
    }

    public function hitHandScore(int $num, int $score): void
    {
        $this->handScore[$num] = $this->handScore[$num] + $score;
    }

    /**
     * Set handScore for phpunit tests
     *
     * @param int $num  index number of array
     * @param int $value    new value for handscore at specific index
     */
    public function setHandScoreTest($num, $value): void
    {
        $this->handScore[$num] = $value;
    }

    public function getHandScore(): mixed
    {
        return $this->handScore;
    }

    /**
     * Player draws top card of the deck and adds to playerhand
     *
     * @param int $num  number of hands
     */
    public function dealFirstPlayerCard(int $num): void
    {
        $hand = array();

        //first card for player
        for($i = 1; $i < $num + 1; $i++) {
            $draw = $this->deck->draw();
            $value = $draw->getValue();
            $this->addHandScore($value);
            if($draw) {
                $hand = array();
                $hand[] =  $draw->getAsString();
            }
            $this->addPlayerHand($hand);
        }
    }

    /**
     * Player draws second top card of the deck and adds to playerhand
     *
     * @param int $num  number of hands
     */
    public function dealSecondPlayerCard($num): void
    {
        for($i = 1; $i < $num + 1; $i++) {
            $draw = $this->deck->draw();
            $value = $draw->getValue();
            $this->hitHandScore($i - 1, $value);
            if($draw) {
                $hand =  $draw->getAsString();
                $this->hitPlayerHand($i - 1, $hand);
            }
        }
    }

    /**
     * Bank draws top card of the deck and adds to playerhand
     */
    public function dealFirstBankCard(): void
    {
        if($this->bankScore <= 21) {
            $draw = $this->deck->draw();
            $value = $draw->getValue();
            $this->bankScore = $this->bankScore + $value;
            $this->firstBankCard = $value;
            if($draw) {
                $this->bankHand[] = $draw->getAsString();
            }
        }
    }

    /**
     * Bank draws second top card of the deck and adds to playerhand
     */
    public function dealsecondBankCard(): void
    {
        //second card for dealer
        if($this->bankScore <= 21) {
            $draw = $this->deck->draw();
            $value = $draw->getValue();
            $this->bankScore = $this->bankScore + $value;
            if($draw) {
                $this->bankHand[] = $draw->getAsString();
            }
        }
    }

    /**
     * Function deals card to dealer
     */
    public function dealBankCard(): void
    {
        $draw = $this->deck->draw();
        $value = $draw->getValue();
        $this->bankScore = $this->bankScore + $value;
        if($draw) {
            $this->bankHand[] = $draw->getAsString();
        }
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
     * @param int $num  number of hands
     * @return array<string|int, mixed> $playerHand
     */
    public function playerdraw($num): mixed
    {
        if($this->handScore[$num] <= 21) {
            $draw = $this->deck->draw();
            $value = $draw->getValue();
            $this->hitHandScore($num, $value);
            if($draw) {
                $this->hitPlayerHand($num, $draw->getAsString());
            }
        }
        return $this->playerHand;
    }

    /**
     * Bankhand
     *
     * @return array<string|int, mixed> $bankHand
     */
    public function bankHand(): mixed
    {
        return $this->bankHand;
    }

    /**
     * Get BankHand
     *
     * @param int $num  index number of array
     *
     * @return string
     */
    public function getbankHand($num): mixed
    {
        return $this->bankHand[$num];
    }

    /**
     * Draws card to dealer hand
     *
     * @return array<string|int, string>
     */
    public function bankdraw(): array
    {
        while ($this->bankScore < 17) {
            $draw = $this->deck->draw();
            $this->bankScore = $this->bankScore + $draw->getValue();
            $card = $draw->getAsString();
            array_push($this->bankHand, $card);
        }

        return $this->bankHand;
    }

    /**
     * Logic to decide if player is bust
     *
     * @return string str - string for flash message
     */
    public function playBust(Player $player): string
    {
        $str = "";
        $win = 0;
        $count = 1;

        foreach($this->handScore as $key => $value) {
            if($value == 21) {
                $str = "hand $count winns";
                $win = $win + $player->getBet($key) * 3;
            }
            if($value > 21) {
                $str = "hand $count bust";
            }
            $count++;
        }
        $player->addAccount($win);

        return $str;
    }

    /**
     * Checks if player got 21
     *
     * @return string   $str
     */
    public function player21(): string
    {
        $str = "";

        foreach($this->handScore as $value) {
            if($value == 21) {
                $str = "21";
            }
        }

        return $str;
    }


    /**
     * Clear all hands and scores for house and player. use before new round
     */
    public function clearHands(): void
    {
        $this->playerHand = array();
        $this->bankHand = array();
        $this->playerScore = 0;
        $this->handScore = array();
        $this->bankScore = 0;
    }

    /**
     * Check if player winns
     *
     * @return int $win
     */
    public function allPlayerWinns(Player $player): int
    {
        $win = 0;
        foreach($this->handScore as $key => $value) {
            $win = $win + $player->getBet($key) * 2;
        }

        return $win;
    }

    /**
     * Logic to give winner of round
     *
     * @return string $str
     */
    public function getWinner(Player $player): string
    {
        $num = 1;
        $win = 0;
        $str = "no winner yet";

        if ($this->getBankScore() > 21) {
            $str = "All player wins!!";
            $win = $this->allPlayerWinns($player);
        }

        foreach($this->handScore as $key => $value) {
            if($value > 21 && $this->getBankScore() < 21) {
                $str = "huset vinner!!";
            }
            if($value == 21) {
                $str = "hand $num wins!!";
                $win = $player->getBet($key) * 3;
            }
            if ($value > $this->getBankScore() && $value < 21) {
                $str = "Player $num wins!!";
                $win = $win + $player->getBet($key) * 2;
            } elseif ($this->getBankScore() == $value) {
                $str = "push!!"; // A tie; the player and dealer have hands with the same total below 22
            }
            $num++;
        }
        $player->addAccount($win);


        if($this->getBankScore() == 21) {
            $str = "House wins!!";
        }

        if ($this->getBankScore() > $this->handScore[0] && $this->getBankScore() < 21) {
            $str = "House wins!!";
        }

        return $str;
    }
}
