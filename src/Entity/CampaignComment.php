<?php

namespace Indiegogo\Entity;

use Indiegogo\AbstractEntity;

class CampaignComment extends AbstractEntity
{
    private int $id;
    private \DateTime $createdAt;
    private string $text;
    private bool $fromTheTeam;
    private string $ownerType;
    private bool $private;
    private Account $account;

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
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = new \DateTime($createdAt);
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return bool
     */
    public function isFromTheTeam(): bool
    {
        return $this->fromTheTeam;
    }

    /**
     * @param bool $fromTheTeam
     */
    public function setFromTheTeam(bool $fromTheTeam): void
    {
        $this->fromTheTeam = $fromTheTeam;
    }

    /**
     * @return string
     */
    public function getOwnerType(): string
    {
        return $this->ownerType;
    }

    /**
     * @param string $ownerType
     */
    public function setOwnerType(string $ownerType): void
    {
        $this->ownerType = $ownerType;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->private;
    }

    /**
     * @param bool $private
     */
    public function setPrivate(bool $private): void
    {
        $this->private = $private;
    }

    /**
     * @return Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }

    /**
     * @param object $account
     */
    public function setAccount(object $account): void
    {
        $this->account = new Account($account);
    }
}
