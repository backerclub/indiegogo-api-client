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
    // life
    private string $productStage;
    /**
     * @var CampaignUpdate[]
     */
    private array $latestUpdates;
    /**
     * @var TeamMember[]
     */
    private array $teamMembers;
    // $projectSponsors

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
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param object $currency
     */
    public function setCurrency(object $currency): void
    {
        $this->currency = new Currency($currency);
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = new DateTime($createdAt);
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = new DateTime($updatedAt);
    }

    /**
     * @return string
     */
    public function getTagline(): string
    {
        return $this->tagline;
    }

    /**
     * @param string $tagline
     */
    public function setTagline(string $tagline): void
    {
        $this->tagline = $tagline;
    }

    /**
     * @return int
     */
    public function getFundingDays(): int
    {
        return $this->fundingDays;
    }

    /**
     * @param int $fundingDays
     */
    public function setFundingDays(int $fundingDays): void
    {
        $this->fundingDays = $fundingDays;
    }

    /**
     * @return string
     */
    public function getBaseballCardImageUrl(): string
    {
        return $this->baseballCardImageUrl;
    }

    /**
     * @param string $baseballCardImageUrl
     */
    public function setBaseballCardImageUrl(string $baseballCardImageUrl): void
    {
        $this->baseballCardImageUrl = $baseballCardImageUrl;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return bool
     */
    public function isForeverFundingActive(): bool
    {
        return $this->foreverFundingActive;
    }

    /**
     * @param bool $foreverFundingActive
     */
    public function setForeverFundingActive(bool $foreverFundingActive): void
    {
        $this->foreverFundingActive = $foreverFundingActive;
    }

    /**
     * @return bool
     */
    public function isStripePayoutActive(): bool
    {
        return $this->stripePayoutActive;
    }

    /**
     * @param bool $stripePayoutActive
     */
    public function setStripePayoutActive(bool $stripePayoutActive): void
    {
        $this->stripePayoutActive = $stripePayoutActive;
    }

    /**
     * @return int
     */
    public function getGoal(): int
    {
        return $this->goal;
    }

    /**
     * @param int $goal
     */
    public function setGoal(int $goal): void
    {
        $this->goal = $goal;
    }

    /**
     * @return bool
     */
    public function isPerksAvailable(): bool
    {
        return $this->perksAvailable;
    }

    /**
     * @param bool $perksAvailable
     */
    public function setPerksAvailable(bool $perksAvailable): void
    {
        $this->perksAvailable = $perksAvailable;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param object $category
     */
    public function setCategory(object $category): void
    {
        $this->category = new Category($category);
    }

    /**
     * @return int
     */
    public function getCollectedFunds(): int
    {
        return $this->collectedFunds;
    }

    /**
     * @param int $collectedFunds
     */
    public function setCollectedFunds(int $collectedFunds): void
    {
        $this->collectedFunds = $collectedFunds;
    }

    /**
     * @return string
     */
    public function getFundingType(): string
    {
        return $this->fundingType;
    }

    /**
     * @param string $fundingType
     */
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

    /**
     * @return string
     */
    public function getCountryCodeAlpha2(): string
    {
        return $this->countryCodeAlpha2;
    }

    /**
     * @param string $countryCodeAlpha2
     */
    public function setCountryCodeAlpha2(string $countryCodeAlpha2): void
    {
        $this->countryCodeAlpha2 = $countryCodeAlpha2;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     */
    public function setRegionCode(string $regionCode): void
    {
        $this->regionCode = $regionCode;
    }

    /**
     * @return int
     */
    public function getContributionsCount(): int
    {
        return $this->contributionsCount;
    }

    /**
     * @param int $contributionsCount
     */
    public function setContributionsCount(int $contributionsCount): void
    {
        $this->contributionsCount = $contributionsCount;
    }

    /**
     * @return int
     */
    public function getCommentsCount(): int
    {
        return $this->commentsCount;
    }

    /**
     * @param int $commentsCount
     */
    public function setCommentsCount(int $commentsCount): void
    {
        $this->commentsCount = $commentsCount;
    }

    /**
     * @return int
     */
    public function getUpdatesCount(): int
    {
        return $this->updatesCount;
    }

    /**
     * @param int $updatesCount
     */
    public function setUpdatesCount(int $updatesCount): void
    {
        $this->updatesCount = $updatesCount;
    }

    /**
     * @return DateTime
     */
    public function getFundingEndsAt(): DateTime
    {
        return $this->fundingEndsAt;
    }

    /**
     * @param string $fundingEndsAt
     */
    public function setFundingEndsAt(string $fundingEndsAt): void
    {
        $this->fundingEndsAt = new DateTime($fundingEndsAt);
    }

    /**
     * @return DateTime
     */
    public function getFundingStartedAt(): DateTime
    {
        return $this->fundingStartedAt;
    }

    /**
     * @param string $fundingStartedAt
     */
    public function setFundingStartedAt(string $fundingStartedAt): void
    {
        $this->fundingStartedAt = new DateTime($fundingStartedAt);
    }

    /**
     * @return string
     */
    public function getWebUrl(): string
    {
        return $this->webUrl;
    }

    /**
     * @param string $webUrl
     */
    public function setWebUrl(string $webUrl): void
    {
        $this->webUrl = $webUrl;
    }

    /**
     * @return bool
     */
    public function isFavorited(): bool
    {
        return $this->favorited;
    }

    /**
     * @param bool $favorited
     */
    public function setFavorited(bool $favorited): void
    {
        $this->favorited = $favorited;
    }

    /**
     * @return int
     */
    public function getForeverFundingCollectedFunds(): int
    {
        return $this->foreverFundingCollectedFunds;
    }

    /**
     * @param int $foreverFundingCollectedFunds
     */
    public function setForeverFundingCollectedFunds(int $foreverFundingCollectedFunds): void
    {
        $this->foreverFundingCollectedFunds = $foreverFundingCollectedFunds;
    }

    /**
     * @return DateTime
     */
    public function getForeverFundingEndsAt(): DateTime
    {
        return $this->foreverFundingEndsAt;
    }

    /**
     * @param string $foreverFundingEndsAt
     */
    public function setForeverFundingEndsAt(string $foreverFundingEndsAt): void
    {
        $this->foreverFundingEndsAt = new DateTime($foreverFundingEndsAt);
    }

    /**
     * @return string
     */
    public function getVideoOverlayUrl(): string
    {
        return $this->videoOverlayUrl;
    }

    /**
     * @param string $videoOverlayUrl
     */
    public function setVideoOverlayUrl(string $videoOverlayUrl): void
    {
        $this->videoOverlayUrl = $videoOverlayUrl;
    }

    /**
     * @return string
     */
    public function getMainImageUrl(): string
    {
        return $this->mainImageUrl;
    }

    /**
     * @param string $mainImageUrl
     */
    public function setMainImageUrl(string $mainImageUrl): void
    {
        $this->mainImageUrl = $mainImageUrl;
    }

    /**
     * @return string
     */
    public function getMainVideoUrl(): string
    {
        return $this->mainVideoUrl;
    }

    /**
     * @param string $mainVideoUrl
     */
    public function setMainVideoUrl(string $mainVideoUrl): void
    {
        $this->mainVideoUrl = $mainVideoUrl;
    }

    /**
     * @return string
     */
    public function getFacebookUrl(): string
    {
        return $this->facebookUrl;
    }

    /**
     * @param string $facebookUrl
     */
    public function setFacebookUrl(string $facebookUrl): void
    {
        $this->facebookUrl = $facebookUrl;
    }

    /**
     * @return string
     */
    public function getProductStage(): string
    {
        return $this->productStage;
    }

    /**
     * @param string $productStage
     */
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
     * @param CampaignUpdate[] $latestUpdates
     */
    public function setLatestUpdates(array $latestUpdates): void
    {
        $this->latestUpdates = $latestUpdates;
    }

    /**
     * @return TeamMember[]
     */
    public function getTeamMembers(): array
    {
        return $this->teamMembers;
    }

    /**
     * @param TeamMember[] $teamMembers
     */
    public function setTeamMembers(array $teamMembers): void
    {
        $this->teamMembers = $teamMembers;
    }
}
