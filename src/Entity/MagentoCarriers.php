<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class MagentoCarriers
{
    /** @var Collection<int, MagentoCarrier> */
    private Collection $carriers;

    public function __construct()
    {
        $this->carriers = new ArrayCollection();
    }

    /**
     * @return Collection<int, MagentoCarrier>
     */
    public function getCarriers(): Collection
    {
        return $this->carriers;
    }

    public function addCarrier(MagentoCarrier $carrier): self
    {
        $this->carriers->add($carrier);

        return $this;
    }

    public function removeCarrier(MagentoCarrier $carrier): self
    {
        $this->carriers->removeElement($carrier);

        return $this;
    }

}
