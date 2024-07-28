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

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $bankHand = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $playerHandOne = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $playerHandTwo = null;

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

    public function getBankHand(): ?array
    {
        return $this->bankHand;
    }

    public function setBankHand(?array $bankHand): static
    {
        $this->bankHand = $bankHand;

        return $this;
    }

    public function getPlayerHandOne(): ?array
    {
        return $this->playerHandOne;
    }

    public function setPlayerHandOne(?array $playerHandOne): static
    {
        $this->playerHandOne = $playerHandOne;

        return $this;
    }

    public function getPlayerHandTwo(): ?array
    {
        return $this->playerHandTwo;
    }

    public function setPlayerHandTwo(?array $playerHandTwo): static
    {
        $this->playerHandTwo = $playerHandTwo;

        return $this;
    }

    public function getPlayerHandThree(): ?array
    {
        return $this->playerHandThree;
    }

    public function setPlayerHandThree(?array $playerHandThree): static
    {
        $this->playerHandThree = $playerHandThree;

        return $this;
    }
}
