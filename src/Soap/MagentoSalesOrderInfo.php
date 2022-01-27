<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

class MagentoSalesOrderInfo
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("increment_id")
     */
    protected $incrementId;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("store_id")
     */
    protected $storeId;
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
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("tax_amount")
     */
    protected $taxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_amount")
     */
    protected $shippingAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("discount_amount")
     */
    protected $discountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("subtotal")
     */
    protected $subtotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("grand_total")
     */
    protected $grandTotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_qty_ordered")
     */
    protected $totalQtyOrdered;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_tax_amount")
     */
    protected $baseTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_amount")
     */
    protected $baseShippingAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_discount_amount")
     */
    protected $baseDiscountAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_subtotal")
     */
    protected $baseSubtotal;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_grand_total")
     */
    protected $baseGrandTotal;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("billing_address_id")
     */
    protected $billingAddressId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("billing_firstname")
     */
    protected $billingFirstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("billing_lastname")
     */
    protected $billingLastname;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("shipping_address_id")
     */
    protected $shippingAddressId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipping_firstname")
     */
    protected $shippingFirstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipping_lastname")
     */
    protected $shippingLastname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("billing_name")
     */
    protected $billingName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipping_name")
     */
    protected $shippingName;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("store_to_base_rate")
     */
    protected $storeToBaseRate;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("store_to_order_rate")
     */
    protected $storeToOrderRate;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_to_global_rate")
     */
    protected $baseToGlobalRate;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_to_order_rate")
     */
    protected $baseToOrderRate;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight")
     */
    protected $weight;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("store_name")
     */
    protected $storeName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("remote_ip")
     */
    protected $remoteIp;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("state")
     */
    protected $state;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("global_currency_code")
     */
    protected $globalCurrencyCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("base_currency_code")
     */
    protected $baseCurrencyCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("store_currency_code")
     */
    protected $storeCurrencyCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("order_currency_code")
     */
    protected $orderCurrencyCode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipping_method")
     */
    protected $shippingMethod;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipping_description")
     */
    protected $shippingDescription;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customer_email")
     */
    protected $customerEmail;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customer_firstname")
     */
    protected $customerFirstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customer_lastname")
     */
    protected $customerLastname;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("quote_id")
     */
    protected $quoteId;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_virtual")
     */
    protected $isVirtual;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("customer_group_id")
     */
    protected $customerGroupId;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("customer_note_notify")
     */
    protected $customerNoteNotify;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("customer_is_guest")
     */
    protected $customerIsGuest;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("email_sent")
     */
    protected $emailSent;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("order_id")
     */
    protected $orderId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("protect_code")
     */
    protected $protectCode;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_tax_amount")
     */
    protected $baseShippingTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_tax_amount")
     */
    protected $shippingTaxAmount;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("paypal_ipn_customer_notified")
     */
    protected $paypalIpnCustomerNotified;
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
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("total_item_count")
     */
    protected $totalItemCount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("hidden_tax_amount")
     */
    protected $hiddenTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_hidden_tax_amount")
     */
    protected $baseHiddenTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_hidden_tax_amount")
     */
    protected $shippingHiddenTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_hidden_tax_amount")
     */
    protected $baseShippingHiddenTaxAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_incl_tax")
     */
    protected $shippingInclTax;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_incl_tax")
     */
    protected $baseShippingInclTax;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_customer_balance_amount")
     */
    protected $baseCustomerBalanceAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("customer_balance_amount")
     */
    protected $customerBalanceAmount;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("gift_cards")
     */
    protected $giftCards;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_gift_cards_amount")
     */
    protected $baseGiftCardsAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("gift_cards_amount")
     */
    protected $giftCardsAmount;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("reward_points_balance")
     */
    protected $rewardPointsBalance;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_reward_currency_amount")
     */
    protected $baseRewardCurrencyAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("reward_currency_amount")
     */
    protected $rewardCurrencyAmount;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstname")
     */
    protected $firstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastname")
     */
    protected $lastname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("telephone")
     */
    protected $telephone;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("postcode")
     */
    protected $postcode;
    /**
     * @var MagentoAddress
     * @Serializer\Type("Scraper\ScraperMagento\Soap\MagentoAddress")
     * @Serializer\SerializedName("shipping_address")
     */
    protected $shippingAddress;
    /**
     * @var MagentoAddress
     * @Serializer\Type("Scraper\ScraperMagento\Soap\MagentoAddress")
     * @Serializer\SerializedName("billing_address")
     */
    protected $billingAddress;
    /**
     * @var MagentoItem
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoItem>")
     * @Serializer\SerializedName("items")
     */
    protected $items;
    /**
     * @var MagentoPayment
     * @Serializer\Type("Scraper\ScraperMagento\Soap\MagentoPayment")
     * @Serializer\SerializedName("payment")
     */
    protected $payment;
    /**
     * @var MagentoItem
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoStatusHistory>")
     * @Serializer\SerializedName("status_history")
     */
    protected $statusHistory;

    /**
     * @return int
     */
    public function getIncrementId(): ?int
    {
        return $this->incrementId;
    }

    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
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
     * @return float
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }

    /**
     * @return float
     */
    public function getShippingAmount(): ?float
    {
        return $this->shippingAmount;
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
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }

    /**
     * @return float
     */
    public function getGrandTotal(): ?float
    {
        return $this->grandTotal;
    }

    /**
     * @return float
     */
    public function getTotalQtyOrdered(): ?float
    {
        return $this->totalQtyOrdered;
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
    public function getBaseShippingAmount(): ?float
    {
        return $this->baseShippingAmount;
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
    public function getBaseSubtotal(): ?float
    {
        return $this->baseSubtotal;
    }

    /**
     * @return float
     */
    public function getBaseGrandTotal(): ?float
    {
        return $this->baseGrandTotal;
    }

    /**
     * @return int
     */
    public function getBillingAddressId(): ?int
    {
        return $this->billingAddressId;
    }

    /**
     * @return string
     */
    public function getBillingFirstname(): ?string
    {
        return $this->billingFirstname;
    }

    /**
     * @return string
     */
    public function getBillingLastname(): ?string
    {
        return $this->billingLastname;
    }

    /**
     * @return int
     */
    public function getShippingAddressId(): ?int
    {
        return $this->shippingAddressId;
    }

    /**
     * @return string
     */
    public function getShippingFirstname(): ?string
    {
        return $this->shippingFirstname;
    }

    /**
     * @return string
     */
    public function getShippingLastname(): ?string
    {
        return $this->shippingLastname;
    }

    /**
     * @return string
     */
    public function getBillingName(): ?string
    {
        return $this->billingName;
    }

    /**
     * @return string
     */
    public function getShippingName(): ?string
    {
        return $this->shippingName;
    }

    /**
     * @return float
     */
    public function getStoreToBaseRate(): ?float
    {
        return $this->storeToBaseRate;
    }

    /**
     * @return float
     */
    public function getStoreToOrderRate(): ?float
    {
        return $this->storeToOrderRate;
    }

    /**
     * @return float
     */
    public function getBaseToGlobalRate(): ?float
    {
        return $this->baseToGlobalRate;
    }

    /**
     * @return float
     */
    public function getBaseToOrderRate(): ?float
    {
        return $this->baseToOrderRate;
    }

    /**
     * @return float
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * @return string
     */
    public function getRemoteIp(): ?string
    {
        return $this->remoteIp;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getGlobalCurrencyCode(): ?string
    {
        return $this->globalCurrencyCode;
    }

    /**
     * @return string
     */
    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }

    /**
     * @return string
     */
    public function getStoreCurrencyCode(): ?string
    {
        return $this->storeCurrencyCode;
    }

    /**
     * @return string
     */
    public function getOrderCurrencyCode(): ?string
    {
        return $this->orderCurrencyCode;
    }

    /**
     * @return string
     */
    public function getShippingMethod(): ?string
    {
        return $this->shippingMethod;
    }

    /**
     * @return string
     */
    public function getShippingDescription(): ?string
    {
        return $this->shippingDescription;
    }

    /**
     * @return string
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }

    /**
     * @return string
     */
    public function getCustomerFirstname(): ?string
    {
        return $this->customerFirstname;
    }

    /**
     * @return string
     */
    public function getCustomerLastname(): ?string
    {
        return $this->customerLastname;
    }

    /**
     * @return int
     */
    public function getQuoteId(): ?int
    {
        return $this->quoteId;
    }

    /**
     * @return bool
     */
    public function isVirtual(): ?bool
    {
        return $this->isVirtual;
    }

    /**
     * @return int
     */
    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }

    /**
     * @return int
     */
    public function getCustomerNoteNotify(): ?int
    {
        return $this->customerNoteNotify;
    }

    /**
     * @return int
     */
    public function getCustomerIsGuest(): ?int
    {
        return $this->customerIsGuest;
    }

    /**
     * @return int
     */
    public function getEmailSent(): ?int
    {
        return $this->emailSent;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getProtectCode(): ?string
    {
        return $this->protectCode;
    }

    /**
     * @return float
     */
    public function getBaseShippingTaxAmount(): ?float
    {
        return $this->baseShippingTaxAmount;
    }

    /**
     * @return float
     */
    public function getShippingTaxAmount(): ?float
    {
        return $this->shippingTaxAmount;
    }

    /**
     * @return int
     */
    public function getPaypalIpnCustomerNotified(): ?int
    {
        return $this->paypalIpnCustomerNotified;
    }

    /**
     * @return float
     */
    public function getBaseShippingDiscountAmount(): ?float
    {
        return $this->baseShippingDiscountAmount;
    }

    /**
     * @return float
     */
    public function getBaseSubtotalInclTax(): ?float
    {
        return $this->baseSubtotalInclTax;
    }

    /**
     * @return float
     */
    public function getShippingDiscountAmount(): ?float
    {
        return $this->shippingDiscountAmount;
    }

    /**
     * @return float
     */
    public function getSubtotalInclTax(): ?float
    {
        return $this->subtotalInclTax;
    }

    /**
     * @return int
     */
    public function getTotalItemCount(): ?int
    {
        return $this->totalItemCount;
    }

    /**
     * @return float
     */
    public function getHiddenTaxAmount(): ?float
    {
        return $this->hiddenTaxAmount;
    }

    /**
     * @return float
     */
    public function getBaseHiddenTaxAmount(): ?float
    {
        return $this->baseHiddenTaxAmount;
    }

    /**
     * @return float
     */
    public function getShippingHiddenTaxAmount(): ?float
    {
        return $this->shippingHiddenTaxAmount;
    }

    /**
     * @return float
     */
    public function getBaseShippingHiddenTaxAmount(): ?float
    {
        return $this->baseShippingHiddenTaxAmount;
    }

    /**
     * @return float
     */
    public function getShippingInclTax(): ?float
    {
        return $this->shippingInclTax;
    }

    /**
     * @return float
     */
    public function getBaseShippingInclTax(): ?float
    {
        return $this->baseShippingInclTax;
    }

    /**
     * @return float
     */
    public function getBaseCustomerBalanceAmount(): ?float
    {
        return $this->baseCustomerBalanceAmount;
    }

    /**
     * @return float
     */
    public function getCustomerBalanceAmount(): ?float
    {
        return $this->customerBalanceAmount;
    }

    /**
     * @return string
     */
    public function getGiftCards(): ?string
    {
        return $this->giftCards;
    }

    /**
     * @return float
     */
    public function getBaseGiftCardsAmount(): ?float
    {
        return $this->baseGiftCardsAmount;
    }

    /**
     * @return float
     */
    public function getGiftCardsAmount(): ?float
    {
        return $this->giftCardsAmount;
    }

    /**
     * @return int
     */
    public function getRewardPointsBalance(): ?int
    {
        return $this->rewardPointsBalance;
    }

    /**
     * @return float
     */
    public function getBaseRewardCurrencyAmount(): ?float
    {
        return $this->baseRewardCurrencyAmount;
    }

    /**
     * @return float
     */
    public function getRewardCurrencyAmount(): ?float
    {
        return $this->rewardCurrencyAmount;
    }

    /**
     * @return string
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @return string
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @return MagentoAddress
     */
    public function getShippingAddress(): ?MagentoAddress
    {
        return $this->shippingAddress;
    }

    /**
     * @return MagentoAddress
     */
    public function getBillingAddress(): ?MagentoAddress
    {
        return $this->billingAddress;
    }

    /**
     * @return MagentoItem
     */
    public function getItems(): ?MagentoItem
    {
        return $this->items;
    }

    /**
     * @return MagentoPayment
     */
    public function getPayment(): ?MagentoPayment
    {
        return $this->payment;
    }

    /**
     * @return MagentoItem
     */
    public function getStatusHistory(): ?MagentoItem
    {
        return $this->statusHistory;
    }
}
