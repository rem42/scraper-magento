<?php

namespace Scraper\ScraperMagento\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoSalesOrderShipmentList
{
    /**
     * @var ArrayCollection|MagentoSalesOrderShipmentInfo[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoSalesOrderShipmentInfo>")
     * @Serializer\SerializedName("sales_order_shipment_list")
     */
    protected $salesOrder;

    /**
     * @return ArrayCollection|MagentoSalesOrderShipmentInfo[]
     */
    public function getSalesOrder()
    {
        return $this->salesOrder;
    }
}
