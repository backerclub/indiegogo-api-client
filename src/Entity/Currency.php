<?php


namespace Indiegogo\Entity;


use Indiegogo\AbstractEntity;

class Currency extends AbstractEntity
{
    private int  $isoNum;
    private string $isoCode;
    private string $symbol;

    /**
     * @return int
     */
    public function getIsoNum(): int
    {
        return $this->isoNum;
    }

    /**
     * @param int $isoNum
     */
    public function setIsoNum(int $isoNum): void
    {
        $this->isoNum = $isoNum;
    }

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    public function setIsoCode(string $isoCode): void
    {
        $this->isoCode = $isoCode;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }
}