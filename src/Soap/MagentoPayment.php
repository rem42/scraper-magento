<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

class MagentoPayment
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("parent_id")
     */
    protected $parentId;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("amount_ordered")
     */
    protected $amountOrdered;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("shipping_amount")
     */
    protected $shippingAmount;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_amount_ordered")
     */
    protected $baseAmountOrdered;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("base_shipping_amount")
     */
    protected $baseShippingAmount;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("method")
     */
    protected $method;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("cc_exp_month")
     */
    protected $ccExpMonth;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("cc_exp_year")
     */
    protected $ccExpYear;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("cc_ss_start_month")
     */
    protected $ccSsStartMonth;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("cc_ss_start_year")
     */
    protected $ccSsStartYear;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("payment_id")
     */
    protected $paymentId;

    /**
     * @return int
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @return float
     */
    public function getAmountOrdered(): ?float
    {
        return $this->amountOrdered;
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
    public function getBaseAmountOrdered(): ?float
    {
        return $this->baseAmountOrdered;
    }

    /**
     * @return float
     */
    public function getBaseShippingAmount(): ?float
    {
        return $this->baseShippingAmount;
    }

    /**
     * @return string
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @return int
     */
    public function getCcExpMonth(): ?int
    {
        return $this->ccExpMonth;
    }

    /**
     * @return int
     */
    public function getCcExpYear(): ?int
    {
        return $this->ccExpYear;
    }

    /**
     * @return int
     */
    public function getCcSsStartMonth(): ?int
    {
        return $this->ccSsStartMonth;
    }

    /**
     * @return int
     */
    public function getCcSsStartYear(): ?int
    {
        return $this->ccSsStartYear;
    }

    /**
     * @return int
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }
}
