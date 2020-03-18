<?php

namespace Scraper\ScraperMagento\Api;

use JMS\Serializer\SerializerBuilder;

class MagentoSalesOrderInfoSoapApi extends MagentoSoapApi
{
    public function execute()
    {
        $serializer   = SerializerBuilder::create()
            ->build()
        ;

        $resources                = 'sales_order_info';

        $data = json_encode(unserialize($this->data));

        $resources = str_replace('_', '', ucwords($resources, '_'));

        return $serializer->deserialize($data, self::NAMESPACE . 'Magento' . ucfirst($resources), 'json');
    }

    public function getResourceName()
    {
        $resource = $this->request->getResource();

        if (in_array($resource, self::$webservices)) {
            return $resource;
        }

        $resources = array_filter(explode('/', $resource));

        if (in_array(end($resources), self::$webservices)) {
            return end($resources);
        }
    }
}
