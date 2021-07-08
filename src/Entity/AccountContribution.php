<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;
use DateTime;

class AccountContribution extends AbstractEntity
{
    private int      $id;
    private DateTime $createdAt;
    private string   $avatarUrl;
    private int      $amount;
    private string   $by;
    private Campaign $campaign;
    private Order    $order;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = new DateTime($createdAt);
    }

    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getBy(): string
    {
        return $this->by;
    }

    public function setBy(string $by): void
    {
        $this->by = $by;
    }

    public function getCampaign(): Campaign
    {
        return $this->campaign;
    }

    public function setCampaign(object $campaign): void
    {
        $this->campaign = new Campaign($campaign);
    }

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(object $order): void
    {
        $this->order = new Order($order);
    }
}
