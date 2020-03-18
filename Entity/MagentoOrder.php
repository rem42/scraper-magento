<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoOrder
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("entity_id")
     */
    protected $entityId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("coupon_code")
     */
    protected $couponCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipping_description")
     */
    protected $shippingDescription;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("customer_id")
     */
    protected $customerId;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_discount_amount")
     */
    protected $baseDiscountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_grand_total")
     */
    protected $baseGrandTotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_amount")
     */
    protected $baseShippingAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_tax_amount")
     */
    protected $baseShippingTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_subtotal")
     */
    protected $baseSubtotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_tax_amount")
     */
    protected $baseTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_total_paid")
     */
    protected $baseTotalPaid;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_total_refunded")
     */
    protected $baseTotalRefunded;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("discount_amount")
     */
    protected $discountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("grand_total")
     */
    protected $grandTotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_amount")
     */
    protected $shippingAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_tax_amount")
     */
    protected $shippingTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("store_to_order_rate")
     */
    protected $storeToOrderRate;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("subtotal")
     */
    protected $subtotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tax_amount")
     */
    protected $taxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_paid")
     */
    protected $totalPaid;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_refunded")
     */
    protected $totalRefunded;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_discount_amount")
     */
    protected $baseShippingDiscountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_subtotal_incl_tax")
     */
    protected $baseSubtotalInclTax;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_total_due")
     */
    protected $baseTotalDue;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_discount_amount")
     */
    protected $shippingDiscountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("subtotal_incl_tax")
     */
    protected $subtotalInclTax;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_due")
     */
    protected $totalDue;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("increment_id")
     */
    protected $incrementId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("base_currency_code")
     */
    protected $baseCurrencyCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("discount_description")
     */
    protected $discountDescription;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("remote_ip")
     */
    protected $remoteIp;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("store_currency_code")
     */
    protected $storeCurrencyCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("store_name")
     */
    protected $storeName;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("created_at")
     */
    protected $createdAt;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_incl_tax")
     */
    protected $shippingInclTax;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("payment_method")
     */
    protected $paymentMethod;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("gift_message_from")
     */
    protected $giftMessageFrom;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("gift_message_to")
     */
    protected $giftMessageTo;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("gift_message_body")
     */
    protected $giftMessageBody;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tax_name")
     */
    protected $taxName;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tax_rate")
     */
    protected $taxRate;
    /**
     * @var ArrayCollection|MagentoAddresse[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoAddresse>")
     * @Serializer\SerializedName("addresses")
     */
    protected $addresses;
    /**
     * @var ArrayCollection|MagentoOrderItem[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoOrderItem>")
     * @Serializer\SerializedName("order_items")
     */
    protected $orderItems;
    /**
     * @var ArrayCollection|MagentoComment[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoComment>")
     * @Serializer\SerializedName("order_comments")
     */
    protected $orderComments;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }

    public function getShippingDescription(): ?string
    {
        return $this->shippingDescription;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function getBaseDiscountAmount(): ?float
    {
        return $this->baseDiscountAmount;
    }

    public function getBaseGrandTotal(): ?float
    {
        return $this->baseGrandTotal;
    }

    public function getBaseShippingAmount(): ?float
    {
        return $this->baseShippingAmount;
    }

    public function getBaseShippingTaxAmount(): ?float
    {
        return $this->baseShippingTaxAmount;
    }

    public function getBaseSubtotal(): ?float
    {
        return $this->baseSubtotal;
    }

    public function getBaseTaxAmount(): ?float
    {
        return $this->baseTaxAmount;
    }

    public function getBaseTotalPaid(): ?float
    {
        return $this->baseTotalPaid;
    }

    public function getBaseTotalRefunded(): ?float
    {
        return $this->baseTotalRefunded;
    }

    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }

    public function getGrandTotal(): ?float
    {
        return $this->grandTotal;
    }

    public function getShippingAmount(): ?float
    {
        return $this->shippingAmount;
    }

    public function getShippingTaxAmount(): ?float
    {
        return $this->shippingTaxAmount;
    }

    public function getStoreToOrderRate(): ?float
    {
        return $this->storeToOrderRate;
    }

    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }

    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }

    public function getTotalPaid(): ?float
    {
        return $this->totalPaid;
    }

    public function getTotalRefunded(): ?float
    {
        return $this->totalRefunded;
    }

    public function getBaseShippingDiscountAmount(): ?float
    {
        return $this->baseShippingDiscountAmount;
    }

    public function getBaseSubtotalInclTax(): ?float
    {
        return $this->baseSubtotalInclTax;
    }

    public function getBaseTotalDue(): ?float
    {
        return $this->baseTotalDue;
    }

    public function getShippingDiscountAmount(): ?float
    {
        return $this->shippingDiscountAmount;
    }

    public function getSubtotalInclTax(): ?float
    {
        return $this->subtotalInclTax;
    }

    public function getTotalDue(): ?float
    {
        return $this->totalDue;
    }

    public function getIncrementId(): ?string
    {
        return $this->incrementId;
    }

    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }

    public function getDiscountDescription(): ?string
    {
        return $this->discountDescription;
    }

    public function getRemoteIp(): ?string
    {
        return $this->remoteIp;
    }

    public function getStoreCurrencyCode(): ?string
    {
        return $this->storeCurrencyCode;
    }

    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function getShippingInclTax(): ?float
    {
        return $this->shippingInclTax;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function getGiftMessageFrom(): ?string
    {
        return $this->giftMessageFrom;
    }

    public function getGiftMessageTo(): ?string
    {
        return $this->giftMessageTo;
    }

    public function getGiftMessageBody(): ?string
    {
        return $this->giftMessageBody;
    }

    public function getTaxName(): ?string
    {
        return $this->taxName;
    }

    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }

    public function getAddresses()
    {
        return $this->addresses;
    }

    public function getOrderItems()
    {
        return $this->orderItems;
    }

    public function getOrderComments()
    {
        return $this->orderComments;
    }
}
