<?php

namespace Scraper\ScraperMagento\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoSalesOrderList
{
    /**
     * @var ArrayCollection|MagentoSalesOrderInfo[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Soap\MagentoSalesOrderInfo>")
     * @Serializer\SerializedName("sales_order_list")
     */
    protected $salesOrder;

    /**
     * @return ArrayCollection|MagentoSalesOrderInfo[]
     */
    public function getSalesOrder()
    {
        return $this->salesOrder;
    }
}
