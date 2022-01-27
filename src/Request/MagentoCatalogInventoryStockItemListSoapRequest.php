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
}
