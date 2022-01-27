<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

class MagentoAddress
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("parent_id")
     */
    protected $parentId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address_type")
     */
    protected $addressType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstname")
     */
    protected $firstname;
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
     * @Serializer\SerializedName("country_id")
     */
    protected $countryId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("telephone")
     */
    protected $telephone;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("region_id")
     */
    protected $regionId;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("address_id")
     */
    protected $addressId;

    /**
     * @return int
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }

    /**
     * @return string
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    /**
     * @return string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @return int
     */
    public function getRegionId(): ?int
    {
        return $this->regionId;
    }

    /**
     * @return int
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
}
