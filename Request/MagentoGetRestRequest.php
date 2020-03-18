<?php

namespace Scraper\ScraperMagento\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class MagentoGetRequest
 *
 * @UrlAnnotation(url="{resource}", contentType="JSON", protocol="OAUTH", method="GET")
 */
class MagentoGetRestRequest extends MagentoRestRequest
{
    /**
     * @var string
     */
    protected $resource;

    /**
     * @return string
     */
    public function getResource(): ?string
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     *
     * @return $this
     */
    public function setResource(?string $resource)
    {
        $this->resource = $resource;
        return $this;
    }
}
