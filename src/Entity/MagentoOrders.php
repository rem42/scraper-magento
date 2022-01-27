<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class MagentoOrders
{
    /** @var Collection<int, MagentoOrder> */
    private Collection $orders;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    /**
     * @return Collection<int, MagentoOrder>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(MagentoOrder $order): self
    {
        $this->orders->add($order);

        return $this;
    }

    public function removeOrder(MagentoOrder $order): self
    {
        $this->orders->removeElement($order);

        return $this;
    }
}
