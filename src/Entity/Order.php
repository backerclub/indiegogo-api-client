<?php

namespace Indiegogo\Entity;

use Indiegogo\AbstractEntity;

class Order extends AbstractEntity
{
    private int $id;
    private array $perks;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getPerks(): array
    {
        return $this->perks;
    }

    /**
     * @param array $perks
     */
    public function setPerks(array $perks): void
    {
        $this->perks = [];
        foreach ($perks as $perk) {
            $this->perks[] = new Perk($perk);
        }
    }
}
