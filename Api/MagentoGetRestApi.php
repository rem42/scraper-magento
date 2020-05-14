<?php

namespace Scraper\ScraperMagento\Api;

use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperMagento\Handler\CustomerHandler;

class MagentoGetRestApi extends MagentoRestApi
{
    protected static $webservices = [
        'products',
        'customers',
        'addresses',
        'orders',
        'carriers',
        'status',
        'shipping',
    ];
    protected static $webservice = [
        'order',
        'customer',
        'address',
        'carrier',
        'shipping',
        'rem42Addresse',
    ];
    protected static $rem42Webservice = [
    ];

    public function execute()
    {
        $serializer   = SerializerBuilder::create()
            ->configureHandlers(function (HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new CustomerHandler());
            })
            ->addDefaultHandlers()
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

        if ('rem42' == $resources[0]) {
            if (3 === count($resources)) {
                return 'rem42' . rtrim(ucfirst($resources[1]), '\s');
            }
            return 'rem42' . ucfirst($resources[1]);
        }
    }
}
