<?php

namespace Scraper\ScraperMagento\Request;

class MagentoDirectoryCountryListSoapRequest extends MagentoSoapRequest
{
    public function getAction(): string
    {
        return 'directoryCountryList';
    }
}
