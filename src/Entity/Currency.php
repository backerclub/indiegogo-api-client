<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Currency extends AbstractEntity
{
    private ?int    $isoNum  = null;
    private ?string $isoCode = null;
    private ?string $symbol  = null;

    public function getIsoNum(): ?int
    {
        return $this->isoNum;
    }

    public function setIsoNum(?int $isoNum): void
    {
        $this->isoNum = $isoNum;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(?string $isoCode): void
    {
        $this->isoCode = $isoCode;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(?string $symbol): void
    {
        $this->symbol = $symbol;
    }
}
