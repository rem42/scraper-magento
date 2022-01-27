<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class MagentoAddresses
{
    /** @var Collection<int, MagentoAddress> */
    private Collection $addresses;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

    /**
     * @return Collection<int, MagentoAddress>
     */
    public function getAddresses(): Collection
    {
        return $this->addresses;
    }

    public function addAddress(MagentoAddress $address): self
    {
        $this->addresses->add($address);

        return $this;
    }

    public function removeAddress(MagentoAddress $address): self
    {
        $this->addresses->removeElement($address);

        return $this;
    }

}
