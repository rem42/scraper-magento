<?php

namespace Scraper\ScraperMagento\Api;

use JMS\Serializer\SerializerBuilder;

class MagentoCatalogInventoryStockItemListSoapApi extends MagentoSoapApi
{
    public function execute()
    {
        $serializer   = SerializerBuilder::create()
            ->build()
        ;

        $resources                = 'stocks';
        $dataToEncode[$resources] = unserialize($this->data);

        $data = json_encode($dataToEncode);

        return $serializer->deserialize($data, self::NAMESPACE . 'Magento' . ucfirst($resources), 'json');
    }
}
