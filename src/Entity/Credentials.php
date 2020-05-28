<?php

namespace Indiegogo\Entity;

use Indiegogo\AbstractEntity;

class Credentials extends Account
{
    private string $name;
    private string $email;
    private string $profilePath;
    private \DateTime $dateOfBirth;
    private int $contributionsCount;
    private string $bio;
    private string $city;
    private string $country;
    private array $campaigns;
    private string $validationErrors;
    private string $state;
    private string $address;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getProfilePath(): string
    {
        return $this->profilePath;
    }

    /**
     * @param string $profilePath
     */
    public function setProfilePath(string $profilePath): void
    {
        $this->profilePath = $profilePath;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth(): \DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string $dateOfBirth
     */
    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = new \DateTime($dateOfBirth);
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
     * @return string
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->bio = $bio;
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
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return array
     */
    public function getCampaigns(): array
    {
        return $this->campaigns;
    }

    /**
     * @param array $campaigns
     */
    public function setCampaigns(array $campaigns): void
    {
        $this->campaigns = [];

        foreach ($campaigns as $campaign) {
            $this->campaigns[] = new Campaign($campaign);
        }
    }

    /**
     * @return string
     */
    public function getValidationErrors(): string
    {
        return $this->validationErrors;
    }

    /**
     * @param string $validationErrors
     */
    public function setValidationErrors(string $validationErrors): void
    {
        $this->validationErrors = $validationErrors;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}
