<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class TeamMember extends AbstractEntity
{
    private ?int    $id   = null;
    private ?string $name = null;
    /**
     * Team Owner or Invititation Status
     * ENUM: owner, accepted
     */
    private ?string $status    = null;
    private ?bool   $owner     = null;
    private ?string $avatarUrl = null;
    private ?int    $accountId = null;
    private ?string $userType  = null;

    // $facebook

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function isOwner(): ?bool
    {
        return $this->owner;
    }

    public function setOwner(?bool $owner): void
    {
        $this->owner = $owner;
    }

    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(?string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    public function getUserType(): ?string
    {
        return $this->userType;
    }

    public function setUserType(?string $userType): void
    {
        $this->userType = $userType;
    }
}
