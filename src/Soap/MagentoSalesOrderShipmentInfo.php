<?php

namespace Scraper\ScraperMagento\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoSalesOrderShipmentInfo
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
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("shipping_address_id")
     */
    protected $shippingAddressId;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("order_id")
     */
    protected $orderId;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_qty")
     */
    protected $totalQty;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("shipment_id")
     */
    protected $shipmentId;
    /**
     * @var MagentoItem
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoItem>")
     * @Serializer\SerializedName("items")
     */
    protected $items;
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     * @Serializer\SerializedName("tracks")
     */
    protected $tracks;
    /**
     * @var ArrayCollection
     * @Serializer\Type("ArrayCollection")
     * @Serializer\SerializedName("comments")
     */
    protected $comments;

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
     * @return int
     */
    public function getShippingAddressId(): ?int
    {
        return $this->shippingAddressId;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @return float
     */
    public function getTotalQty(): ?float
    {
        return $this->totalQty;
    }

    /**
     * @return int
     */
    public function getShipmentId(): ?int
    {
        return $this->shipmentId;
    }

    /**
     * @return MagentoItem
     */
    public function getItems(): ?MagentoItem
    {
        return $this->items;
    }

    /**
     * @return ArrayCollection
     */
    public function getTracks(): ?ArrayCollection
    {
        return $this->tracks;
    }

    /**
     * @return ArrayCollection
     */
    public function getComments(): ?ArrayCollection
    {
        return $this->comments;
    }
}
