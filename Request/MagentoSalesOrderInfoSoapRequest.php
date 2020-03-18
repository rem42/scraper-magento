<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderInfoSoapRequest extends MagentoSoapRequest
{
    public function getAction(): string
    {
        return 'salesOrderInfo';
    }
}
