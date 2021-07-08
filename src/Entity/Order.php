<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;

class Order extends AbstractEntity
{
    private int   $id;
    private array $perks;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Perk[]
     */
    public function getPerks(): array
    {
        return $this->perks;
    }

    /**
     * @param array|object[]|Perk[] $perks
     */
    public function setPerks(array $perks): void
    {
        $this->perks = array_map(
            fn($perk) => $perk instanceof Perk
                ? $perk
                : new Perk((object)$perk),
            $perks
        );
    }
}
