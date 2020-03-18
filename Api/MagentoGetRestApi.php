<?php

namespace Scraper\ScraperMagento\Api;

use JMS\Serializer\SerializerBuilder;

class MagentoGetRestApi extends MagentoRestApi
{
    protected static $webservices = [
        'products',
        'customers',
        'addresses',
        'orders',
    ];
    protected static $webservice = [
        'order',
    ];

    public function execute()
    {
        $serializer   = SerializerBuilder::create()
            ->build()
        ;

        $resources = $this->getResourceName();

        if (in_array($resources, self::$webservice)) {
            $dataToEncode = $this->data;
        } else {
            $dataToEncode[$resources] = array_values($this->data);
        }

        $data = json_encode($dataToEncode);

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

        if (in_array($resources[0], self::$webservices)) {
            return rtrim($resources[0], '\s');
        }
    }
}
