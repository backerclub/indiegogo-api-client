<?php

namespace BackerClub\IndiegogoApiClient\Entity;

use DateTime;

class Credentials extends Account
{
    private string   $name;
    private string   $email;
    private string   $profilePath;
    private DateTime $dateOfBirth;
    private int      $contributionsCount;
    private string   $bio;
    private string   $city;
    private string   $country;
    private array    $campaigns;
    private string   $validationErrors;
    private string   $state;
    private string   $address;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getProfilePath(): string
    {
        return $this->profilePath;
    }

    public function setProfilePath(string $profilePath): void
    {
        $this->profilePath = $profilePath;
    }

    public function getDateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = new DateTime($dateOfBirth);
    }

    public function getContributionsCount(): int
    {
        return $this->contributionsCount;
    }

    public function setContributionsCount(int $contributionsCount): void
    {
        $this->contributionsCount = $contributionsCount;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getCampaigns(): array
    {
        return $this->campaigns;
    }

    /**
     * @param array|object[]|Campaign[] $campaigns
     */
    public function setCampaigns(array $campaigns): void
    {
        $this->campaigns = array_map(
            fn($campaign) => $campaign instanceof Campaign
                ? $campaign
                : new Campaign((object)$campaign),
            $campaigns
        );
    }

    public function getValidationErrors(): string
    {
        return $this->validationErrors;
    }

    public function setValidationErrors(string $validationErrors): void
    {
        $this->validationErrors = $validationErrors;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}
