<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;
use DateTime;

/**
 * @link https://developer.indiegogo.com/docs/
 */
class Token extends AbstractEntity
{
    private ?string   $accessToken  = null;
    private ?string   $tokenType    = 'Bearer';
    private ?int      $expiresIn    = null;
    private ?string   $refreshToken = null;
    private ?DateTime $createdAt    = null;

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    public function setTokenType(?string $tokenType): void
    {
        $this->tokenType = $tokenType;
    }

    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(?int $expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * Is the access token expired?
     */
    public function isExpired(): ?bool
    {
        if (!isset($this->expiresIn, $this->createdAt)) {
            return false;
        }

        return ($this->expiresIn + $this->getCreatedAt()?->getTimestamp() < time());
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt ? (new DateTime())->setTimestamp($createdAt) : null;
    }
}
