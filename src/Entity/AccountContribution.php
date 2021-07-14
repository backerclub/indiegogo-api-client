<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;
use DateTime;

class AccountContribution extends AbstractEntity
{
    private ?int      $id        = null;
    private ?DateTime $createdAt = null;
    private ?string   $avatarUrl = null;
    private ?int      $amount    = null;
    private ?string   $by        = null;
    private ?Campaign $campaign  = null;
    private ?Order    $order     = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt ? new DateTime($createdAt) : null;
    }

    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(?string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    public function getBy(): ?string
    {
        return $this->by;
    }

    public function setBy(?string $by): void
    {
        $this->by = $by;
    }

    public function getCampaign(): ?Campaign
    {
        return $this->campaign;
    }

    public function setCampaign(?object $campaign): void
    {
        $this->campaign = $campaign ? new Campaign($campaign) : null;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(?object $order): void
    {
        $this->order = $order ? new Order($order) : null;
    }
}
