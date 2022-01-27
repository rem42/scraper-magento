<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class MagentoProducts
{
    /** @var Collection<int, MagentoProduct> */
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return Collection<int, MagentoProduct>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(MagentoProduct $product): self
    {
        $this->products->add($product);

        return $this;
    }

    public function removeProduct(MagentoProduct $product): self
    {
        $this->products->removeElement($product);

        return $this;
    }

}
