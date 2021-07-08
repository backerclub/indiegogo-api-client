<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Category extends AbstractEntity
{
    private string $identifier;
    private string $localizedName;
    private string $iconUrl;

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getLocalizedName(): string
    {
        return $this->localizedName;
    }

    /**
     * @param string $localizedName
     */
    public function setLocalizedName(string $localizedName): void
    {
        $this->localizedName = $localizedName;
    }

    /**
     * @return string
     */
    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     */
    public function setIconUrl(string $iconUrl): void
    {
        $this->iconUrl = $iconUrl;
    }
}
