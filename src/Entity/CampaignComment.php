<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;
use DateTime;

class CampaignComment extends AbstractEntity
{
    private ?int      $id          = null;
    private ?DateTime $createdAt   = null;
    private ?string   $text        = null;
    private ?bool     $fromTheTeam = null;
    private ?string   $ownerType   = null;
    private ?bool     $private     = null;
    private ?Account  $account     = null;

    public function getId(): ?int
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function isFromTheTeam(): ?bool
    {
        return $this->fromTheTeam;
    }

    public function setFromTheTeam(?bool $fromTheTeam): void
    {
        $this->fromTheTeam = $fromTheTeam;
    }

    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    public function setOwnerType(?string $ownerType): void
    {
        $this->ownerType = $ownerType;
    }

    public function isPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(?bool $private): void
    {
        $this->private = $private;
    }

    public function getAccount(): ?Account
    {
        return $this->account;
    }

    public function setAccount(?object $account): void
    {
        $this->account = $account ? new Account($account) : null;
    }
}
