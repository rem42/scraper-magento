<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class MagentoCustomers
{
    /** @var Collection<int, MagentoCustomer> */
    private Collection $customers;

    public function __construct()
    {
        $this->customers = new ArrayCollection();
    }

    /**
     * @return Collection<int, MagentoCustomer>
     */
    public function getCustomers(): Collection
    {
        return $this->customers;
    }

    public function addCustomer(MagentoCustomer $customer): self
    {
        $this->customers->add($customer);

        return $this;
    }

    public function removeCustomer(MagentoCustomer $customer): self
    {
        $this->customers->removeElement($customer);

        return $this;
    }
}
