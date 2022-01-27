<?php

namespace Scraper\ScraperMagento\Entity;

final class MagentoOrderItem
{

    private ?int $itemId = null;

    private ?int $parentItemId = null;

    private ?string $sku = null;

    private ?string $name = null;

    private ?float $qtyCanceled = null;

    private ?float $qtyInvoiced = null;

    private ?float $qtyOrdered = null;

    private ?float $qtyRefunded = null;

    private ?float $qtyShipped = null;

    private ?float $price = null;

    private ?float $basePrice = null;

    private ?float $originalPrice = null;

    private ?float $baseOriginalPrice = null;

    private ?float $taxPercent = null;

    private ?float $taxAmount = null;

    private ?float $baseTaxAmount = null;

    private ?float $discountAmount = null;

    private ?float $baseDiscountAmount = null;

    private ?float $rowTotal = null;

    private ?float $baseRowTotal = null;

    private ?float $priceInclTax = null;

    private ?float $basePriceInclTax = null;

    private ?float $rowTotalInclTax = null;

    private ?float $baseRowTotalInclTax = null;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }


    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getParentItemId(): ?int
    {
        return $this->parentItemId;
    }


    public function setParentItemId(?int $parentItemId): self
    {
        $this->parentItemId = $parentItemId;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }


    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQtyCanceled(): ?float
    {
        return $this->qtyCanceled;
    }


    public function setQtyCanceled(?float $qtyCanceled): self
    {
        $this->qtyCanceled = $qtyCanceled;

        return $this;
    }

    public function getQtyInvoiced(): ?float
    {
        return $this->qtyInvoiced;
    }


    public function setQtyInvoiced(?float $qtyInvoiced): self
    {
        $this->qtyInvoiced = $qtyInvoiced;

        return $this;
    }

    public function getQtyOrdered(): ?float
    {
        return $this->qtyOrdered;
    }


    public function setQtyOrdered(?float $qtyOrdered): self
    {
        $this->qtyOrdered = $qtyOrdered;

        return $this;
    }

    public function getQtyRefunded(): ?float
    {
        return $this->qtyRefunded;
    }


    public function setQtyRefunded(?float $qtyRefunded): self
    {
        $this->qtyRefunded = $qtyRefunded;

        return $this;
    }

    public function getQtyShipped(): ?float
    {
        return $this->qtyShipped;
    }


    public function setQtyShipped(?float $qtyShipped): self
    {
        $this->qtyShipped = $qtyShipped;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }


    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }


    public function setBasePrice(?float $basePrice): self
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }


    public function setOriginalPrice(?float $originalPrice): self
    {
        $this->originalPrice = $originalPrice;

        return $this;
    }

    public function getBaseOriginalPrice(): ?float
    {
        return $this->baseOriginalPrice;
    }


    public function setBaseOriginalPrice(?float $baseOriginalPrice): self
    {
        $this->baseOriginalPrice = $baseOriginalPrice;

        return $this;
    }

    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }


    public function setTaxPercent(?float $taxPercent): self
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }

    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }


    public function setTaxAmount(?float $taxAmount): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    public function getBaseTaxAmount(): ?float
    {
        return $this->baseTaxAmount;
    }


    public function setBaseTaxAmount(?float $baseTaxAmount): self
    {
        $this->baseTaxAmount = $baseTaxAmount;

        return $this;
    }

    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }


    public function setDiscountAmount(?float $discountAmount): self
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getBaseDiscountAmount(): ?float
    {
        return $this->baseDiscountAmount;
    }


    public function setBaseDiscountAmount(?float $baseDiscountAmount): self
    {
        $this->baseDiscountAmount = $baseDiscountAmount;

        return $this;
    }

    public function getRowTotal(): ?float
    {
        return $this->rowTotal;
    }


    public function setRowTotal(?float $rowTotal): self
    {
        $this->rowTotal = $rowTotal;

        return $this;
    }

    public function getBaseRowTotal(): ?float
    {
        return $this->baseRowTotal;
    }


    public function setBaseRowTotal(?float $baseRowTotal): self
    {
        $this->baseRowTotal = $baseRowTotal;

        return $this;
    }

    public function getPriceInclTax(): ?float
    {
        return $this->priceInclTax;
    }


    public function setPriceInclTax(?float $priceInclTax): self
    {
        $this->priceInclTax = $priceInclTax;

        return $this;
    }

    public function getBasePriceInclTax(): ?float
    {
        return $this->basePriceInclTax;
    }


    public function setBasePriceInclTax(?float $basePriceInclTax): self
    {
        $this->basePriceInclTax = $basePriceInclTax;

        return $this;
    }

    public function getRowTotalInclTax(): ?float
    {
        return $this->rowTotalInclTax;
    }


    public function setRowTotalInclTax(?float $rowTotalInclTax): self
    {
        $this->rowTotalInclTax = $rowTotalInclTax;

        return $this;
    }

    public function getBaseRowTotalInclTax(): ?float
    {
        return $this->baseRowTotalInclTax;
    }


    public function setBaseRowTotalInclTax(?float $baseRowTotalInclTax): self
    {
        $this->baseRowTotalInclTax = $baseRowTotalInclTax;

        return $this;
    }
}
