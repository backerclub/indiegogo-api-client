<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Category extends AbstractEntity
{
    private string $identifier;
    private string $localizedName;
    private string $iconUrl;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getLocalizedName(): string
    {
        return $this->localizedName;
    }

    public function setLocalizedName(string $localizedName): void
    {
        $this->localizedName = $localizedName;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function setIconUrl(string $iconUrl): void
    {
        $this->iconUrl = $iconUrl;
    }
}
