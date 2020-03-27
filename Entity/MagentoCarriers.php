<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoCarriers
{
    /**
     * @var ArrayCollection|MagentoCarrier[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoCarrier>")
     * @Serializer\SerializedName("carriers")
     */
    protected $carriers;

    /**
     * @return ArrayCollection|MagentoCarrier[]|null
     */
    public function getCarriers(): ?ArrayCollection
    {
        return $this->carriers;
    }
}
