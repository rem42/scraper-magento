<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderShipmentInfoSoapRequest extends MagentoSoapRequest
{
    public function getAction(): string
    {
        return 'salesOrderShipmentInfo';
    }
}
