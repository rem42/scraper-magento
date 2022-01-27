<?php

namespace Scraper\ScraperMagento\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoSalesOrderShipmentGetCarriers
{
    /**
     * @var ArrayCollection|MagentoSalesOrderShipmentGetCarrier[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoSalesOrderShipmentGetCarrier>")
     * @Serializer\SerializedName("sales_order_shipment_get_carriers")
     */
    protected $carriers;

    /**
     * @return ArrayCollection|MagentoSalesOrderShipmentGetCarrier[]
     */
    public function getCarriers()
    {
        return $this->carriers;
    }
}
