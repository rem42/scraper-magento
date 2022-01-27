<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class MagentoStatus
{
    /** @var Collection<int, MagentoState> */
    private Collection $status;

    public function __construct()
    {
        $this->status = new ArrayCollection();
    }

    /**
     * @return Collection<int, MagentoState>
     */
    public function getStatus(): Collection
    {
        return $this->status;
    }

    public function addState(MagentoState $state): self
    {
        $this->status->add($state);

        return $this;
    }

    public function removeState(MagentoState $state): self
    {
        $this->status->removeElement($state);

        return $this;
    }
}
