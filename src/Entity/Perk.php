<?php

namespace Indiegogo\Entity;

use Indiegogo\AbstractEntity;

class Perk extends AbstractEntity
{
    private int $id;
    private string $campaignSlug;
    private int $amount;
    private string $description;
    private int $numberClaimed;
    private int $numberAvailable;
    private \DateTime $estimatedDeliveryDate;
    private bool $shippingAddressRequired;
    private string $label;
    private $validationErrors;
    private bool $featured;
    private int $nonTaxDeductibleAmount = 0;
    private string $perkType;
    /**
     * Items exist when the Perk belongs to an Order.
     *
     * @var Item[]
     */
    private array $items;

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
    public function getCampaignSlug(): string
    {
        return $this->campaignSlug;
    }

    /**
     * @param string $campaignSlug
     */
    public function setCampaignSlug(string $campaignSlug): void
    {
        $this->campaignSlug = $campaignSlug;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getNumberClaimed(): int
    {
        return $this->numberClaimed;
    }

    /**
     * @param int $numberClaimed
     */
    public function setNumberClaimed(int $numberClaimed): void
    {
        $this->numberClaimed = $numberClaimed;
    }

    /**
     * @return int
     */
    public function getNumberAvailable(): int
    {
        return $this->numberAvailable;
    }

    /**
     * @param int $numberAvailable
     */
    public function setNumberAvailable(int $numberAvailable): void
    {
        $this->numberAvailable = $numberAvailable;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate(): \DateTime
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * @param string $estimatedDeliveryDate
     */
    public function setEstimatedDeliveryDate(string $estimatedDeliveryDate): void
    {
        $this->estimatedDeliveryDate = new \DateTime($estimatedDeliveryDate);
    }

    /**
     * @return bool
     */
    public function isShippingAddressRequired(): bool
    {
        return $this->shippingAddressRequired;
    }

    /**
     * @param bool $shippingAddressRequired
     */
    public function setShippingAddressRequired(bool $shippingAddressRequired): void
    {
        $this->shippingAddressRequired = $shippingAddressRequired;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getValidationErrors()
    {
        return $this->validationErrors;
    }

    /**
     * @param mixed $validationErrors
     */
    public function setValidationErrors($validationErrors): void
    {
        $this->validationErrors = $validationErrors;
    }

    /**
     * @return bool
     */
    public function isFeatured(): bool
    {
        return $this->featured;
    }

    /**
     * @param bool $featured
     */
    public function setFeatured(bool $featured): void
    {
        $this->featured = $featured;
    }

    /**
     * @return int
     */
    public function getNonTaxDeductibleAmount(): int
    {
        return $this->nonTaxDeductibleAmount;
    }

    /**
     * @param int $nonTaxDeductibleAmount
     */
    public function setNonTaxDeductibleAmount(int $nonTaxDeductibleAmount): void
    {
        $this->nonTaxDeductibleAmount = $nonTaxDeductibleAmount;
    }

    /**
     * @return string
     */
    public function getPerkType(): string
    {
        return $this->perkType;
    }

    /**
     * @param string $perkType
     */
    public function setPerkType(string $perkType): void
    {
        $this->perkType = $perkType;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = [];

        foreach ($items as $item) {
            $this->items[] = new Item($item);
        }
    }
}
