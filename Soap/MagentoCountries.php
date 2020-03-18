<?php

namespace Scraper\ScraperMagento\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoCountries
{
    /**
     * @var ArrayCollection|MagentoCountry[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoCountry>")
     * @Serializer\SerializedName("countries")
     */
    protected $countries;

    /**
     * @return ArrayCollection|MagentoCountry[]|null
     */
    public function getCountries(): ?ArrayCollection
    {
        return $this->countries;
    }
}
