<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoAddresse
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("entity_id")
     */
    protected $entityId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastname")
     */
    protected $lastname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstname")
     */
    protected $firstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("telephone")
     */
    protected $telephone;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("company")
     */
    protected $company;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("postcode")
     */
    protected $postcode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    protected $city;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("country_id")
     */
    protected $countryId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("region")
     */
    protected $region;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("street")
     */
    protected $street;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_default_billing")
     */
    protected $isDefaultBilling;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_default_shipping")
     */
    protected $isDefaultShipping;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function isDefaultBilling(): ?bool
    {
        return $this->isDefaultBilling;
    }

    public function isDefaultShipping(): ?bool
    {
        return $this->isDefaultShipping;
    }
}
