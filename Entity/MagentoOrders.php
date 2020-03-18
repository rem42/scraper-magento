<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoOrders
{
    /**
     * @var ArrayCollection|MagentoOrder[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoOrder>")
     * @Serializer\SerializedName("orders")
     */
    protected $orders;

    /**
     * @return ArrayCollection|MagentoOrder[]|null
     */
    public function getOrders(): ?ArrayCollection
    {
        return $this->orders;
    }
}
