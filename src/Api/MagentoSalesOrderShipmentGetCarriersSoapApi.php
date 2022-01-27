<?php

namespace Scraper\ScraperMagento\Api;

use JMS\Serializer\SerializerBuilder;

class MagentoSalesOrderShipmentGetCarriersSoapApi extends MagentoSoapApi
{
    public function execute()
    {
        $serializer   = SerializerBuilder::create()
            ->build()
        ;

        $resources                = 'sales_order_shipment_get_carriers';
        $dataToEncode[$resources] = unserialize($this->data);

        $data = json_encode($dataToEncode);

        $resources = str_replace('_', '', ucwords($resources, '_'));

        return $serializer->deserialize($data, self::NAMESPACE . 'Magento' . ucfirst($resources), 'json');
    }
}
