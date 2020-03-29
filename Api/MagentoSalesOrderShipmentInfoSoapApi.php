<?php

namespace Scraper\ScraperMagento\Api;

use JMS\Serializer\SerializerBuilder;

class MagentoSalesOrderShipmentInfoSoapApi extends MagentoSoapApi
{
    public function execute()
    {
        $serializer   = SerializerBuilder::create()
            ->build()
        ;

        $resources                = 'sales_order_shipment_info';

        $data = json_encode(unserialize($this->data));

        $resources = str_replace('_', '', ucwords($resources, '_'));

        return $serializer->deserialize($data, self::NAMESPACE . 'Magento' . ucfirst($resources), 'json');
    }
}
