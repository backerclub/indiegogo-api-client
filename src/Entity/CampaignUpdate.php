<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;
use DateTime;

class CampaignUpdate extends AbstractEntity
{
    private ?int      $id          = null;
    private ?DateTime $created_at  = null;
    private ?string   $text        = null;
    private ?string   $html        = null;
    private ?string   $previewText = null;
    private ?array    $imagUrls    = [];
    private ?Account  $account     = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(?string $created_at): void
    {
        $this->created_at = $created_at ? new DateTime($created_at) : null;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function getHtml(): ?string
    {
        return $this->html;
    }

    public function setHtml(?string $html): void
    {
        $this->html = $html;
    }

    public function getPreviewText(): ?string
    {
        return $this->previewText;
    }

    public function setPreviewText(?string $previewText): void
    {
        $this->previewText = $previewText;
    }

    public function getImagUrls(): ?array
    {
        return $this->imagUrls;
    }

    public function setImagUrls(?array $imagUrls): void
    {
        $this->imagUrls = $imagUrls;
    }

    public function getAccount(): ?Account
    {
        return $this->account;
    }

    public function setAccount(?object $account): void
    {
        $this->account = $account ? new Account($account) : null;
    }
}
