<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoOrderItem
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("item_id")
     */
    protected $itemId;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("parent_item_id")
     */
    protected $parentItemId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sku")
     */
    protected $sku;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("qty_canceled")
     */
    protected $qtyCanceled;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("qty_invoiced")
     */
    protected $qtyInvoiced;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("qty_ordered")
     */
    protected $qtyOrdered;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("qty_refunded")
     */
    protected $qtyRefunded;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("qty_shipped")
     */
    protected $qtyShipped;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("price")
     */
    protected $price;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_price")
     */
    protected $basePrice;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("original_price")
     */
    protected $originalPrice;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_original_price")
     */
    protected $baseOriginalPrice;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tax_percent")
     */
    protected $taxPercent;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tax_amount")
     */
    protected $taxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_tax_amount")
     */
    protected $baseTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("discount_amount")
     */
    protected $discountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_discount_amount")
     */
    protected $baseDiscountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("row_total")
     */
    protected $rowTotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_row_total")
     */
    protected $baseRowTotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("price_incl_tax")
     */
    protected $priceInclTax;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_price_incl_tax")
     */
    protected $basePriceInclTax;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("row_total_incl_tax")
     */
    protected $rowTotalInclTax;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_row_total_incl_tax")
     */
    protected $baseRowTotalInclTax;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getParentItemId(): ?int
    {
        return $this->parentItemId;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getQtyCanceled(): ?float
    {
        return $this->qtyCanceled;
    }

    public function getQtyInvoiced(): ?float
    {
        return $this->qtyInvoiced;
    }

    public function getQtyOrdered(): ?float
    {
        return $this->qtyOrdered;
    }

    public function getQtyRefunded(): ?float
    {
        return $this->qtyRefunded;
    }

    public function getQtyShipped(): ?float
    {
        return $this->qtyShipped;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }

    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }

    public function getBaseOriginalPrice(): ?float
    {
        return $this->baseOriginalPrice;
    }

    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }

    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }

    public function getBaseTaxAmount(): ?float
    {
        return $this->baseTaxAmount;
    }

    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }

    public function getBaseDiscountAmount(): ?float
    {
        return $this->baseDiscountAmount;
    }

    public function getRowTotal(): ?float
    {
        return $this->rowTotal;
    }

    public function getBaseRowTotal(): ?float
    {
        return $this->baseRowTotal;
    }

    public function getPriceInclTax(): ?float
    {
        return $this->priceInclTax;
    }

    public function getBasePriceInclTax(): ?float
    {
        return $this->basePriceInclTax;
    }

    public function getRowTotalInclTax(): ?float
    {
        return $this->rowTotalInclTax;
    }

    public function getBaseRowTotalInclTax(): ?float
    {
        return $this->baseRowTotalInclTax;
    }
}
