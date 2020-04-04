<?php

namespace Scraper\ScraperMagento\Request;

class MagentoCatalogInventoryStockItemListSoapRequest extends MagentoSoapRequest
{
    protected $products = [];

    public function getAction(): string
    {
        return 'catalogInventoryStockItemList';
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function isRequestSpecific(): bool
    {
        return true;
    }

    public function sendRequest(\SoapClient $client, $sessionId)
    {
        return $client->{$this->getAction()}($sessionId, $this->products);
    }
}
