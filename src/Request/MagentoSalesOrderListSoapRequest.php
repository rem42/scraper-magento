<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderListSoapRequest extends MagentoSoapRequest
{
    public function getAction(): string
    {
        return 'salesOrderList';
    }
}
