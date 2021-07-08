<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;
use DateTime;

class CampaignComment extends AbstractEntity
{
    private int      $id;
    private DateTime $createdAt;
    private string   $text;
    private bool     $fromTheTeam;
    private string   $ownerType;
    private bool     $private;
    private Account  $account;

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

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function isFromTheTeam(): bool
    {
        return $this->fromTheTeam;
    }

    public function setFromTheTeam(bool $fromTheTeam): void
    {
        $this->fromTheTeam = $fromTheTeam;
    }

    public function getOwnerType(): string
    {
        return $this->ownerType;
    }

    /**
     * @param string $ownerType
     */
    public function setOwnerType(string $ownerType): void
    {
        $this->ownerType = $ownerType;
    }

    public function isPrivate(): bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): void
    {
        $this->private = $private;
    }

    public function getAccount(): Account
    {
        return $this->account;
    }

    public function setAccount(object $account): void
    {
        $this->account = new Account($account);
    }
}
