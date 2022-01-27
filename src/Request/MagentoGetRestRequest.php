<?php

namespace Scraper\ScraperMagento\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="{resource}", method="GET")
 */
final class MagentoGetRestRequest extends MagentoRestRequest
{
    private string $resource;
}
