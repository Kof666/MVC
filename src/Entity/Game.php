<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $playerId = null;

    /**
     * @var array<string|int, mixed>|null
     */
    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $bankHand = null;

    /**
     * @var array<string|int, mixed>|null
     */
    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $playerHandOne = null;

    /**
     * @var array<string|int, mixed>|null
     */
    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $playerHandTwo = null;

    /**
     * @var array<string|int, mixed>|null
     */
    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $playerHandThree = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayerId(): ?int
    {
        return $this->playerId;
    }

    public function setPlayerId(?int $playerId): static
    {
        $this->playerId = $playerId;

        return $this;
    }

    /**
     * @return array<string|int, mixed>|null
     */
    public function getBankHand(): ?array
    {
        return $this->bankHand;
    }

    /**
     * @param array<string|int, mixed>|null $bankHand
     *
     */
    public function setBankHand(?array $bankHand): static
    {
        $this->bankHand = $bankHand;

        return $this;
    }

    /**
     * @return array<string|int, mixed>|null
     */
    public function getPlayerHandOne(): ?array
    {
        return $this->playerHandOne;
    }

    /**
     * @param array<string|int, mixed>|null $playerHandOne
     */
    public function setPlayerHandOne(?array $playerHandOne): static
    {
        $this->playerHandOne = $playerHandOne;

        return $this;
    }

    /**
     * @return array<string|int, mixed>|null
     */
    public function getPlayerHandTwo(): ?array
    {
        return $this->playerHandTwo;
    }

    /**
     * @param array<string|int, mixed>|null $playerHandTwo
     */
    public function setPlayerHandTwo(?array $playerHandTwo): static
    {
        $this->playerHandTwo = $playerHandTwo;

        return $this;
    }

    /**
     * @return array<string|int, mixed>|null $playerHandThree
     */
    public function getPlayerHandThree(): ?array
    {
        return $this->playerHandThree;
    }

    /**
     * @param array<string|int, mixed>|null $playerHandThree
     */
    public function setPlayerHandThree(?array $playerHandThree): static
    {
        $this->playerHandThree = $playerHandThree;

        return $this;
    }
}
