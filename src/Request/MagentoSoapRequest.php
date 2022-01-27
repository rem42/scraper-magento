<?php

namespace Scraper\ScraperMagento\Request;

use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(scheme="HTTPS", host="{host}", path="/api/v2_soap?wsdl=1")
 */
abstract class MagentoSoapRequest extends ScraperRequest
{
    private string $host;
    /** @var string */
    protected string $apiUser;
    /** @var string */
    protected string $apiKey;
}
