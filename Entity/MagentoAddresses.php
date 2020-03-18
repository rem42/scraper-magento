<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoAddresses
{
    /**
     * @var ArrayCollection|MagentoAddresse[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoAddresse>")
     * @Serializer\SerializedName("addresses")
     */
    protected $addresses;

    /**
     * @return ArrayCollection|MagentoAddresse[]|null
     */
    public function getAddresses(): ?ArrayCollection
    {
        return $this->addresses;
    }
}
