<?php

namespace App\Entity;

use App\Repository\BlackjackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlackjackRepository::class)]
class Blackjack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $account = null;

    #[ORM\Column]
    private ?int $num_of_hands = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAccount(): ?int
    {
        return $this->account;
    }

    public function setAccount(int $account): static
    {
        $this->account = $account;

        return $this;
    }

    public function getNumOfHands(): ?int
    {
        return $this->num_of_hands;
    }

    public function setNumOfHands(int $num_of_hands): static
    {
        $this->num_of_hands = $num_of_hands;

        return $this;
    }
}
