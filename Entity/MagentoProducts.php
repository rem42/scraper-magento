<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoProducts
{
    /**
     * @var ArrayCollection|MagentoProduct[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoProduct>")
     * @Serializer\SerializedName("products")
     */
    protected $products;

    /**
     * @return ArrayCollection|MagentoProduct[]|null
     */
    public function getProducts(): ?ArrayCollection
    {
        return $this->products;
    }
}
