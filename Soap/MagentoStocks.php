<?php

namespace Scraper\ScraperMagento\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoStocks
{
    /**
     * @var ArrayCollection|MagentoStock[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoStock>")
     * @Serializer\SerializedName("stocks")
     */
    protected $stocks;

    /**
     * @return ArrayCollection|MagentoStock[]|null
     */
    public function getStocks(): ?ArrayCollection
    {
        return $this->stocks;
    }
}
