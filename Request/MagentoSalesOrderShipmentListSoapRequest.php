<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderShipmentListSoapRequest extends MagentoSoapRequest
{
    public function getAction(): string
    {
        return 'salesOrderShipmentList';
    }
}
