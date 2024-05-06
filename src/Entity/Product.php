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
    private ?int $id_prod = null;


    #[ORM\Column(type: Types::TEXT)]
    private ?string $primaryImageUrl = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $secondaryImageUrl = null;
    #[ORM\Column(length: 50, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $old_price = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $current_price = null;
    #[ORM\Column(nullable: true)]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $rating = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $category = null;


    public function getId_prod(): ?int
    {
        return $this->id_prod;
    }

    public function getPrimaryImageUrl(): ?string
    {
        return $this->primaryImageUrl;
    }

    public function setPrimaryImageUrl(string $primaryImageUrl): self
    {
        $this->primaryImageUrl = $primaryImageUrl;

        return $this;
    }
    public function getSecondaryImageUrl(): ?string
    {
        return $this->secondaryImageUrl;
    }

    public function setSecondaryImageUrl(string $secondaryImageUrl): self
    {
        $this->secondaryImageUrl = $secondaryImageUrl;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getOldPrice(): ?string
    {
        return $this->old_price;
    }

    public function setOldPrice(?string $old_price): static
    {
        $this->old_price = $old_price;

        return $this;
    }
    public function getCurrentPrice(): ?string
    {
        return $this->current_price;
    }

    public function setCurrentPrice(?string $current_price): static
    {
        $this->current_price = $current_price;

        return $this;
    }
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): static
    {
        $this->category = $category;

        return $this;
    }


}
