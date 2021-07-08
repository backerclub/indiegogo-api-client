<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Sku extends AbstractEntity
{
    private int    $id;
    private string $code;
    private array  $choices;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return Choice[]
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * @param array|object[]|Choice[] $choices
     */
    public function setChoices(array $choices): void
    {
        $this->choices = array_map(
            fn($choice) => $choice instanceof Choice
                ? $choice
                : new Choice((object)$choice),
            $choices
        );
    }
}
