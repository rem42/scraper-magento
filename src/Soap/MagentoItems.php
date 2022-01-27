<?php

namespace Scraper\ScraperMagento\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoItems
{
    /**
     * @var ArrayCollection|MagentoItem[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoItem>")
     * @Serializer\SerializedName("items")
     */
    protected $items;

    /**
     * @return ArrayCollection|MagentoItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
}
