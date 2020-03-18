<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoCustomers
{
    /**
     * @var ArrayCollection|MagentoCustomer[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoCustomer>")
     * @Serializer\SerializedName("customers")
     */
    protected $customers;

    /**
     * @return ArrayCollection|MagentoCustomer[]|null
     */
    public function getCustomers(): ?ArrayCollection
    {
        return $this->customers;
    }
}
