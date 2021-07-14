<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Item extends AbstractEntity
{
    private ?int    $id       = null;
    private ?string $name     = null;
    private ?int    $quantity = null;
    private ?Sku    $sku      = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getSku(): ?Sku
    {
        return $this->sku;
    }

    public function setSku(?object $sku): void
    {
        $this->sku = $sku ? new Sku($sku) : null;
    }
}
