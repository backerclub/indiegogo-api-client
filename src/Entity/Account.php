<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Account extends AbstractEntity
{
    private int    $id;
    private string $firstname = '';
    private string $lastname  = '';
    private string $avatarUrl = '';

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }
}
