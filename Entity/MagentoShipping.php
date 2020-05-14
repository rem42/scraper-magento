<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoShipping
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("region")
     */
    protected $region;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("postcode")
     */
    protected $postcode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastname")
     */
    protected $lastname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("street")
     */
    protected $street;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    protected $city;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     */
    protected $email;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("telephone")
     */
    protected $telephone;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("country_id")
     */
    protected $countryId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstname")
     */
    protected $firstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address_type")
     */
    protected $addressType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("prefix")
     */
    protected $prefix;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("middlename")
     */
    protected $middlename;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("suffix")
     */
    protected $suffix;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("company")
     */
    protected $company;

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function getAddressType(): ?string
    {
        return $this->addressType;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }
}
