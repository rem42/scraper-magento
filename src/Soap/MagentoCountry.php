<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

class MagentoCountry
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("country_id")
     */
    protected $countryId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("iso2_code")
     */
    protected $iso2Code;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("iso3_code")
     */
    protected $iso3Code;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function getIso2Code(): ?string
    {
        return $this->iso2Code;
    }

    public function getIso3Code(): ?string
    {
        return $this->iso3Code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
