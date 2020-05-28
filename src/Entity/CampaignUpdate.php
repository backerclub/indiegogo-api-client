<?php

namespace Indiegogo\Entity;

use Indiegogo\AbstractEntity;

class CampaignUpdate extends AbstractEntity
{
    private int $id;
    private \DateTime $created_at;
    private string $text;
    private string $html;
    private string $previewText;
    private array $imagUrls = [];
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
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = new \DateTime($created_at);
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
     * @return string
     */
    public function getHtml(): string
    {
        return $this->html;
    }

    /**
     * @param string $html
     */
    public function setHtml(string $html): void
    {
        $this->html = $html;
    }

    /**
     * @return string
     */
    public function getPreviewText(): string
    {
        return $this->previewText;
    }

    /**
     * @param string $previewText
     */
    public function setPreviewText(string $previewText): void
    {
        $this->previewText = $previewText;
    }

    /**
     * @return array
     */
    public function getImagUrls(): array
    {
        return $this->imagUrls;
    }

    /**
     * @param array $imagUrls
     */
    public function setImagUrls(array $imagUrls): void
    {
        $this->imagUrls = $imagUrls;
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
