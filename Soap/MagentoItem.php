<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

class MagentoItem
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("item_id")
     */
    protected $itemId;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("order_id")
     */
    protected $orderId;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("quote_item_id")
     */
    protected $quoteItemId;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("created_at")
     */
    protected $createdAt;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("updated_at")
     */
    protected $updatedAt;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("product_id")
     */
    protected $productId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("product_type")
     */
    protected $productType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("product_options")
     */
    protected $productOptions;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight")
     */
    protected $weight;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_virtual")
     */
    protected $isVirtual;
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
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("free_shipping")
     */
    protected $freeShipping;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_qty_decimal")
     */
    protected $isQtyDecimal;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("no_discount")
     */
    protected $noDiscount;
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
     * @Serializer\SerializedName("tax_invoiced")
     */
    protected $taxInvoiced;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_tax_invoiced")
     */
    protected $baseTaxInvoiced;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("discount_percent")
     */
    protected $discountPercent;
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
     * @Serializer\SerializedName("discount_invoiced")
     */
    protected $discountInvoiced;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_discount_invoiced")
     */
    protected $baseDiscountInvoiced;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("amount_refunded")
     */
    protected $amountRefunded;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_amount_refunded")
     */
    protected $baseAmountRefunded;
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
     * @Serializer\SerializedName("row_invoiced")
     */
    protected $rowInvoiced;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_row_invoiced")
     */
    protected $baseRowInvoiced;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("row_weight")
     */
    protected $rowWeight;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("gift_message_available")
     */
    protected $giftMessageAvailable;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("weee_tax_applied")
     */
    protected $weeeTaxApplied;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weee_tax_applied_amount")
     */
    protected $weeeTaxAppliedAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weee_tax_applied_row_amount")
     */
    protected $weeeTaxAppliedRowAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_weee_tax_applied_amount")
     */
    protected $baseWeeeTaxAppliedAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_weee_tax_applied_row_amount")
     */
    protected $baseWeeeTaxAppliedRowAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weee_tax_disposition")
     */
    protected $weeeTaxDisposition;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weee_tax_row_disposition")
     */
    protected $weeeTaxRowDisposition;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_weee_tax_disposition")
     */
    protected $baseWeeeTaxDisposition;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_weee_tax_row_disposition")
     */
    protected $baseWeeeTaxRowDisposition;

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @return int
     */
    public function getQuoteItemId(): ?int
    {
        return $this->quoteItemId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * @return string
     */
    public function getProductOptions(): ?string
    {
        return $this->productOptions;
    }

    /**
     * @return float
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return bool
     */
    public function isVirtual(): ?bool
    {
        return $this->isVirtual;
    }

    /**
     * @return string
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isFreeShipping(): ?bool
    {
        return $this->freeShipping;
    }

    /**
     * @return bool
     */
    public function isQtyDecimal(): ?bool
    {
        return $this->isQtyDecimal;
    }

    /**
     * @return bool
     */
    public function isNoDiscount(): ?bool
    {
        return $this->noDiscount;
    }

    /**
     * @return float
     */
    public function getQtyCanceled(): ?float
    {
        return $this->qtyCanceled;
    }

    /**
     * @return float
     */
    public function getQtyInvoiced(): ?float
    {
        return $this->qtyInvoiced;
    }

    /**
     * @return float
     */
    public function getQtyOrdered(): ?float
    {
        return $this->qtyOrdered;
    }

    /**
     * @return float
     */
    public function getQtyRefunded(): ?float
    {
        return $this->qtyRefunded;
    }

    /**
     * @return float
     */
    public function getQtyShipped(): ?float
    {
        return $this->qtyShipped;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }

    /**
     * @return float
     */
    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }

    /**
     * @return float
     */
    public function getBaseOriginalPrice(): ?float
    {
        return $this->baseOriginalPrice;
    }

    /**
     * @return float
     */
    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }

    /**
     * @return float
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }

    /**
     * @return float
     */
    public function getBaseTaxAmount(): ?float
    {
        return $this->baseTaxAmount;
    }

    /**
     * @return float
     */
    public function getTaxInvoiced(): ?float
    {
        return $this->taxInvoiced;
    }

    /**
     * @return float
     */
    public function getBaseTaxInvoiced(): ?float
    {
        return $this->baseTaxInvoiced;
    }

    /**
     * @return float
     */
    public function getDiscountPercent(): ?float
    {
        return $this->discountPercent;
    }

    /**
     * @return float
     */
    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }

    /**
     * @return float
     */
    public function getBaseDiscountAmount(): ?float
    {
        return $this->baseDiscountAmount;
    }

    /**
     * @return float
     */
    public function getDiscountInvoiced(): ?float
    {
        return $this->discountInvoiced;
    }

    /**
     * @return float
     */
    public function getBaseDiscountInvoiced(): ?float
    {
        return $this->baseDiscountInvoiced;
    }

    /**
     * @return float
     */
    public function getAmountRefunded(): ?float
    {
        return $this->amountRefunded;
    }

    /**
     * @return float
     */
    public function getBaseAmountRefunded(): ?float
    {
        return $this->baseAmountRefunded;
    }

    /**
     * @return float
     */
    public function getRowTotal(): ?float
    {
        return $this->rowTotal;
    }

    /**
     * @return float
     */
    public function getBaseRowTotal(): ?float
    {
        return $this->baseRowTotal;
    }

    /**
     * @return float
     */
    public function getRowInvoiced(): ?float
    {
        return $this->rowInvoiced;
    }

    /**
     * @return float
     */
    public function getBaseRowInvoiced(): ?float
    {
        return $this->baseRowInvoiced;
    }

    /**
     * @return float
     */
    public function getRowWeight(): ?float
    {
        return $this->rowWeight;
    }

    /**
     * @return bool
     */
    public function isGiftMessageAvailable(): ?bool
    {
        return $this->giftMessageAvailable;
    }

    /**
     * @return string
     */
    public function getWeeeTaxApplied(): ?string
    {
        return $this->weeeTaxApplied;
    }

    /**
     * @return float
     */
    public function getWeeeTaxAppliedAmount(): ?float
    {
        return $this->weeeTaxAppliedAmount;
    }

    /**
     * @return float
     */
    public function getWeeeTaxAppliedRowAmount(): ?float
    {
        return $this->weeeTaxAppliedRowAmount;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxAppliedAmount(): ?float
    {
        return $this->baseWeeeTaxAppliedAmount;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxAppliedRowAmount(): ?float
    {
        return $this->baseWeeeTaxAppliedRowAmount;
    }

    /**
     * @return float
     */
    public function getWeeeTaxDisposition(): ?float
    {
        return $this->weeeTaxDisposition;
    }

    /**
     * @return float
     */
    public function getWeeeTaxRowDisposition(): ?float
    {
        return $this->weeeTaxRowDisposition;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxDisposition(): ?float
    {
        return $this->baseWeeeTaxDisposition;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxRowDisposition(): ?float
    {
        return $this->baseWeeeTaxRowDisposition;
    }
}
