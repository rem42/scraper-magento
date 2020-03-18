<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderShipmentGetCarriersSoapRequest extends MagentoSoapRequest
{
    public function getAction(): string
    {
        return 'salesOrderShipmentGetCarriers';
    }
}
