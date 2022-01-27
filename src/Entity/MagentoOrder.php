<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class MagentoOrder
{
    private ?int $entityId = null;
    
    private ?string $status = null;
    
    private ?string $couponCode = null;
    
    private ?string $shippingDescription = null;
    
    private ?int $customerId = null;
    
    private ?float $baseDiscountAmount = null;
    
    private ?float $baseGrandTotal = null;
    
    private ?float $baseShippingAmount = null;
    
    private ?float $baseShippingTaxAmount = null;
    
    private ?float $baseSubtotal = null;
    
    private ?float $baseTaxAmount = null;
    
    private ?float $baseTotalPaid = null;
    
    private ?float $baseTotalRefunded = null;
    
    private ?float $discountAmount = null;
    
    private ?float $grandTotal = null;
    
    private ?float $shippingAmount = null;
    
    private ?float $shippingTaxAmount = null;
    
    private ?float $storeToOrderRate = null;
    
    private ?float $subtotal = null;
    
    private ?float $taxAmount = null;
    
    private ?float $totalPaid = null;
    
    private ?float $totalRefunded = null;
    
    private ?float $baseShippingDiscountAmount = null;
    
    private ?float $baseSubtotalInclTax = null;
    
    private ?float $baseTotalDue = null;
    
    private ?float $shippingDiscountAmount = null;
    
    private ?float $subtotalInclTax = null;
    
    private ?float $totalDue = null;
    
    private ?string $incrementId = null;
    
    private ?string $baseCurrencyCode = null;
    
    private ?string $discountDescription = null;
    
    private ?string $remoteIp = null;
    
    private ?string $storeCurrencyCode = null;
    
    private ?string $storeName = null;
    
    private ?\DateTimeInterface $createdAt = null;
    
    private ?float $shippingInclTax = null;
    
    private ?string $paymentMethod = null;
    
    private ?string $giftMessageFrom = null;
    
    private ?string $giftMessageTo = null;
    
    private ?string $giftMessageBody = null;
    
    private ?string $taxName = null;
    
    private ?float $taxRate = null;

    /** @var Collection<int, MagentoAddress> */
    private Collection $addresses;
    /** @var Collection<int, MagentoOrderItem> */
    private Collection $orderItems;
    /** @var Collection<int, MagentoComment> */
    private Collection $orderComments;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
        $this->orderItems = new ArrayCollection();
        $this->orderComments = new ArrayCollection();
    }

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }


    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }


    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }


    public function setCouponCode(?string $couponCode): self
    {
        $this->couponCode = $couponCode;

        return $this;
    }

    public function getShippingDescription(): ?string
    {
        return $this->shippingDescription;
    }


    public function setShippingDescription(?string $shippingDescription): self
    {
        $this->shippingDescription = $shippingDescription;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }


    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;

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

    public function getBaseGrandTotal(): ?float
    {
        return $this->baseGrandTotal;
    }


    public function setBaseGrandTotal(?float $baseGrandTotal): self
    {
        $this->baseGrandTotal = $baseGrandTotal;

        return $this;
    }

    public function getBaseShippingAmount(): ?float
    {
        return $this->baseShippingAmount;
    }


    public function setBaseShippingAmount(?float $baseShippingAmount): self
    {
        $this->baseShippingAmount = $baseShippingAmount;

        return $this;
    }

    public function getBaseShippingTaxAmount(): ?float
    {
        return $this->baseShippingTaxAmount;
    }


    public function setBaseShippingTaxAmount(?float $baseShippingTaxAmount): self
    {
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;

        return $this;
    }

    public function getBaseSubtotal(): ?float
    {
        return $this->baseSubtotal;
    }


    public function setBaseSubtotal(?float $baseSubtotal): self
    {
        $this->baseSubtotal = $baseSubtotal;

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

    public function getBaseTotalPaid(): ?float
    {
        return $this->baseTotalPaid;
    }


    public function setBaseTotalPaid(?float $baseTotalPaid): self
    {
        $this->baseTotalPaid = $baseTotalPaid;

        return $this;
    }

    public function getBaseTotalRefunded(): ?float
    {
        return $this->baseTotalRefunded;
    }


    public function setBaseTotalRefunded(?float $baseTotalRefunded): self
    {
        $this->baseTotalRefunded = $baseTotalRefunded;

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

    public function getGrandTotal(): ?float
    {
        return $this->grandTotal;
    }


    public function setGrandTotal(?float $grandTotal): self
    {
        $this->grandTotal = $grandTotal;

        return $this;
    }

    public function getShippingAmount(): ?float
    {
        return $this->shippingAmount;
    }


    public function setShippingAmount(?float $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    public function getShippingTaxAmount(): ?float
    {
        return $this->shippingTaxAmount;
    }


    public function setShippingTaxAmount(?float $shippingTaxAmount): self
    {
        $this->shippingTaxAmount = $shippingTaxAmount;

        return $this;
    }

    public function getStoreToOrderRate(): ?float
    {
        return $this->storeToOrderRate;
    }


    public function setStoreToOrderRate(?float $storeToOrderRate): self
    {
        $this->storeToOrderRate = $storeToOrderRate;

        return $this;
    }

    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }


    public function setSubtotal(?float $subtotal): self
    {
        $this->subtotal = $subtotal;

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

    public function getTotalPaid(): ?float
    {
        return $this->totalPaid;
    }


    public function setTotalPaid(?float $totalPaid): self
    {
        $this->totalPaid = $totalPaid;

        return $this;
    }

    public function getTotalRefunded(): ?float
    {
        return $this->totalRefunded;
    }


    public function setTotalRefunded(?float $totalRefunded): self
    {
        $this->totalRefunded = $totalRefunded;

        return $this;
    }

    public function getBaseShippingDiscountAmount(): ?float
    {
        return $this->baseShippingDiscountAmount;
    }


    public function setBaseShippingDiscountAmount(?float $baseShippingDiscountAmount): self
    {
        $this->baseShippingDiscountAmount = $baseShippingDiscountAmount;

        return $this;
    }

    public function getBaseSubtotalInclTax(): ?float
    {
        return $this->baseSubtotalInclTax;
    }


    public function setBaseSubtotalInclTax(?float $baseSubtotalInclTax): self
    {
        $this->baseSubtotalInclTax = $baseSubtotalInclTax;

        return $this;
    }

    public function getBaseTotalDue(): ?float
    {
        return $this->baseTotalDue;
    }


    public function setBaseTotalDue(?float $baseTotalDue): self
    {
        $this->baseTotalDue = $baseTotalDue;

        return $this;
    }

    public function getShippingDiscountAmount(): ?float
    {
        return $this->shippingDiscountAmount;
    }


    public function setShippingDiscountAmount(?float $shippingDiscountAmount): self
    {
        $this->shippingDiscountAmount = $shippingDiscountAmount;

        return $this;
    }

    public function getSubtotalInclTax(): ?float
    {
        return $this->subtotalInclTax;
    }


    public function setSubtotalInclTax(?float $subtotalInclTax): self
    {
        $this->subtotalInclTax = $subtotalInclTax;

        return $this;
    }

    public function getTotalDue(): ?float
    {
        return $this->totalDue;
    }


    public function setTotalDue(?float $totalDue): self
    {
        $this->totalDue = $totalDue;

        return $this;
    }

    public function getIncrementId(): ?string
    {
        return $this->incrementId;
    }


    public function setIncrementId(?string $incrementId): self
    {
        $this->incrementId = $incrementId;

        return $this;
    }

    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }


    public function setBaseCurrencyCode(?string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;

        return $this;
    }

    public function getDiscountDescription(): ?string
    {
        return $this->discountDescription;
    }


    public function setDiscountDescription(?string $discountDescription): self
    {
        $this->discountDescription = $discountDescription;

        return $this;
    }

    public function getRemoteIp(): ?string
    {
        return $this->remoteIp;
    }


    public function setRemoteIp(?string $remoteIp): self
    {
        $this->remoteIp = $remoteIp;

        return $this;
    }

    public function getStoreCurrencyCode(): ?string
    {
        return $this->storeCurrencyCode;
    }


    public function setStoreCurrencyCode(?string $storeCurrencyCode): self
    {
        $this->storeCurrencyCode = $storeCurrencyCode;

        return $this;
    }

    public function getStoreName(): ?string
    {
        return $this->storeName;
    }


    public function setStoreName(?string $storeName): self
    {
        $this->storeName = $storeName;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }


    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getShippingInclTax(): ?float
    {
        return $this->shippingInclTax;
    }


    public function setShippingInclTax(?float $shippingInclTax): self
    {
        $this->shippingInclTax = $shippingInclTax;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }


    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getGiftMessageFrom(): ?string
    {
        return $this->giftMessageFrom;
    }


    public function setGiftMessageFrom(?string $giftMessageFrom): self
    {
        $this->giftMessageFrom = $giftMessageFrom;

        return $this;
    }

    public function getGiftMessageTo(): ?string
    {
        return $this->giftMessageTo;
    }


    public function setGiftMessageTo(?string $giftMessageTo): self
    {
        $this->giftMessageTo = $giftMessageTo;

        return $this;
    }

    public function getGiftMessageBody(): ?string
    {
        return $this->giftMessageBody;
    }


    public function setGiftMessageBody(?string $giftMessageBody): self
    {
        $this->giftMessageBody = $giftMessageBody;

        return $this;
    }

    public function getTaxName(): ?string
    {
        return $this->taxName;
    }


    public function setTaxName(?string $taxName): self
    {
        $this->taxName = $taxName;

        return $this;
    }

    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }


    public function setTaxRate(?float $taxRate): self
    {
        $this->taxRate = $taxRate;

        return $this;
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

    /**
     * @return Collection<int, MagentoOrderItem>
     */
    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(MagentoOrderItem $orderItem): self
    {
        $this->orderItems->add($orderItem);

        return $this;
    }

    public function removeOrderItem(MagentoOrderItem $orderItem): self
    {
        $this->orderItems->removeElement($orderItem);

        return $this;
    }
    /**
     * @return Collection<int, MagentoComment>
     */
    public function getOrderComments(): Collection
    {
        return $this->orderComments;
    }

    public function addOrderComment(MagentoComment $orderComment): self
    {
        $this->orderComments->add($orderComment);

        return $this;
    }

    public function removeOrderComment(MagentoComment $orderComment): self
    {
        $this->orderComments->removeElement($orderComment);

        return $this;
    }
}
