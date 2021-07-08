<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use BackerClub\IndiegogoApiClient\AbstractEntity;
use DateTime;

class Campaign extends AbstractEntity
{
    private int    $id;
    private string $slug;
    private string $title;
    // $imageTypes
    private Currency $currency;
    private DateTime $createdAt;
    private DateTime $updatedAt;
    private string   $tagline;
    private int      $fundingDays;
    private string   $baseballCardImageUrl;
    private string   $city;
    private bool     $foreverFundingActive;
    private bool     $stripePayoutActive;
    private int      $goal;
    private bool     $perksAvailable;
    private Category $category;
    private int      $collectedFunds;
    private string   $fundingType;
    private string   $countryCodeAlpha2;
    private string   $region;
    private string   $regionCode;
    private int      $contributionsCount;
    private int      $commentsCount;
    private int      $updatesCount;
    private DateTime $fundingEndsAt;
    private DateTime $fundingStartedAt;
    private string   $webUrl;
    private bool     $favorited;
    private int      $foreverFundingCollectedFunds;
    private DateTime $foreverFundingEndsAt;
    private string   $videoOverlayUrl;
    private string   $mainImageUrl;
    private string   $mainVideoUrl;
    private string   $facebookUrl;
    private string   $productStage;
    /**
     * @var CampaignUpdate[]
     */
    private array $latestUpdates;
    /**
     * @var TeamMember[]
     */
    private array $teamMembers;

    // $projectSponsors
    // life

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(object $currency): void
    {
        $this->currency = new Currency($currency);
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = new DateTime($createdAt);
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = new DateTime($updatedAt);
    }

    public function getTagline(): string
    {
        return $this->tagline;
    }

    public function setTagline(string $tagline): void
    {
        $this->tagline = $tagline;
    }

    public function getFundingDays(): int
    {
        return $this->fundingDays;
    }

    public function setFundingDays(int $fundingDays): void
    {
        $this->fundingDays = $fundingDays;
    }

    public function getBaseballCardImageUrl(): string
    {
        return $this->baseballCardImageUrl;
    }

    public function setBaseballCardImageUrl(string $baseballCardImageUrl): void
    {
        $this->baseballCardImageUrl = $baseballCardImageUrl;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function isForeverFundingActive(): bool
    {
        return $this->foreverFundingActive;
    }

    public function setForeverFundingActive(bool $foreverFundingActive): void
    {
        $this->foreverFundingActive = $foreverFundingActive;
    }

    public function isStripePayoutActive(): bool
    {
        return $this->stripePayoutActive;
    }

    public function setStripePayoutActive(bool $stripePayoutActive): void
    {
        $this->stripePayoutActive = $stripePayoutActive;
    }

    public function getGoal(): int
    {
        return $this->goal;
    }

    public function setGoal(int $goal): void
    {
        $this->goal = $goal;
    }

    public function isPerksAvailable(): bool
    {
        return $this->perksAvailable;
    }

    public function setPerksAvailable(bool $perksAvailable): void
    {
        $this->perksAvailable = $perksAvailable;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(object $category): void
    {
        $this->category = new Category($category);
    }

    public function getCollectedFunds(): int
    {
        return $this->collectedFunds;
    }

    public function setCollectedFunds(int $collectedFunds): void
    {
        $this->collectedFunds = $collectedFunds;
    }

    public function getFundingType(): string
    {
        return $this->fundingType;
    }

    public function setFundingType(string $fundingType): void
    {
        $this->fundingType = $fundingType;
    }

    public function isFixedFundingType(): bool
    {
        return ($this->getFundingType() === "fixed");
    }

    public function isFlexibleFundingType(): bool
    {
        return ($this->getFundingType() === "flexible");
    }

    public function getCountryCodeAlpha2(): string
    {
        return $this->countryCodeAlpha2;
    }

    public function setCountryCodeAlpha2(string $countryCodeAlpha2): void
    {
        $this->countryCodeAlpha2 = $countryCodeAlpha2;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    public function getRegionCode(): string
    {
        return $this->regionCode;
    }

    public function setRegionCode(string $regionCode): void
    {
        $this->regionCode = $regionCode;
    }

    public function getContributionsCount(): int
    {
        return $this->contributionsCount;
    }

    public function setContributionsCount(int $contributionsCount): void
    {
        $this->contributionsCount = $contributionsCount;
    }

    public function getCommentsCount(): int
    {
        return $this->commentsCount;
    }

    public function setCommentsCount(int $commentsCount): void
    {
        $this->commentsCount = $commentsCount;
    }

    public function getUpdatesCount(): int
    {
        return $this->updatesCount;
    }

    public function setUpdatesCount(int $updatesCount): void
    {
        $this->updatesCount = $updatesCount;
    }

    public function getFundingEndsAt(): DateTime
    {
        return $this->fundingEndsAt;
    }

    public function setFundingEndsAt(string $fundingEndsAt): void
    {
        $this->fundingEndsAt = new DateTime($fundingEndsAt);
    }

    public function getFundingStartedAt(): DateTime
    {
        return $this->fundingStartedAt;
    }

    public function setFundingStartedAt(string $fundingStartedAt): void
    {
        $this->fundingStartedAt = new DateTime($fundingStartedAt);
    }

    public function getWebUrl(): string
    {
        return $this->webUrl;
    }

    public function setWebUrl(string $webUrl): void
    {
        $this->webUrl = $webUrl;
    }

    public function isFavorited(): bool
    {
        return $this->favorited;
    }

    public function setFavorited(bool $favorited): void
    {
        $this->favorited = $favorited;
    }

    public function getForeverFundingCollectedFunds(): int
    {
        return $this->foreverFundingCollectedFunds;
    }

    public function setForeverFundingCollectedFunds(int $foreverFundingCollectedFunds): void
    {
        $this->foreverFundingCollectedFunds = $foreverFundingCollectedFunds;
    }

    public function getForeverFundingEndsAt(): DateTime
    {
        return $this->foreverFundingEndsAt;
    }

    public function setForeverFundingEndsAt(string $foreverFundingEndsAt): void
    {
        $this->foreverFundingEndsAt = new DateTime($foreverFundingEndsAt);
    }

    public function getVideoOverlayUrl(): string
    {
        return $this->videoOverlayUrl;
    }

    public function setVideoOverlayUrl(string $videoOverlayUrl): void
    {
        $this->videoOverlayUrl = $videoOverlayUrl;
    }

    public function getMainImageUrl(): string
    {
        return $this->mainImageUrl;
    }

    public function setMainImageUrl(string $mainImageUrl): void
    {
        $this->mainImageUrl = $mainImageUrl;
    }

    public function getMainVideoUrl(): string
    {
        return $this->mainVideoUrl;
    }

    public function setMainVideoUrl(string $mainVideoUrl): void
    {
        $this->mainVideoUrl = $mainVideoUrl;
    }

    public function getFacebookUrl(): string
    {
        return $this->facebookUrl;
    }

    public function setFacebookUrl(string $facebookUrl): void
    {
        $this->facebookUrl = $facebookUrl;
    }

    public function getProductStage(): string
    {
        return $this->productStage;
    }

    public function setProductStage(string $productStage): void
    {
        $this->productStage = $productStage;
    }

    /**
     * @return CampaignUpdate[]
     */
    public function getLatestUpdates(): array
    {
        return $this->latestUpdates;
    }

    /**
     * @param array|object[]|CampaignUpdate[] $latestUpdates
     */
    public function setLatestUpdates(array $latestUpdates): void
    {
        $this->latestUpdates = array_map(
            fn($latestUpdate) => $latestUpdate instanceof CampaignUpdate
                ? $latestUpdate
                : new CampaignUpdate((object)$latestUpdate),
            $latestUpdates
        );
    }

    /**
     * @return TeamMember[]
     */
    public function getTeamMembers(): array
    {
        return $this->teamMembers;
    }

    /**
     * @param array|object[]|TeamMember[] $teamMembers
     */
    public function setTeamMembers(array $teamMembers): void
    {
        $this->teamMembers = array_map(
            fn($teamMember) => $teamMember instanceof TeamMember
                ? $teamMember
                : new TeamMember((object)$teamMember),
            $teamMembers
        );
    }
}
