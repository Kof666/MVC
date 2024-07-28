<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $test = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTest(): ?array
    {
        return $this->test;
    }

    public function setTest(?array $test): static
    {
        $this->test = $test;

        return $this;
    }
}
