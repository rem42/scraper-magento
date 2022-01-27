<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

class MagentoStock
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("product_id")
     */
    protected $productId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sku")
     */
    protected $sku;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("qty")
     */
    protected $qty;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_in_stock")
     */
    protected $isInStock;

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function getQty(): ?string
    {
        return $this->qty;
    }

    public function isInStock(): ?bool
    {
        return $this->isInStock;
    }
}
