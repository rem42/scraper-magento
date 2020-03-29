<?php

namespace Scraper\ScraperMagento\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\RequestSoap;

/**
 * @UrlAnnotation(baseUrl="{urlWebsite}/api/v2_soap?wsdl=1", protocol="SOAP", contentType="text")
 */
abstract class MagentoSoapRequest extends RequestSoap
{
    /**
     * @var string
     */
    protected $urlWebsite;
    /** @var string */
    protected $apiUser;
    /** @var string */
    protected $apiKey;
    protected $id;

    public function isLoginNeed(): bool
    {
        return true;
    }

    public function isDoRequest(): bool
    {
        return false;
    }

    public function isRequestSpecific(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getUrlWebsite(): string
    {
        return $this->urlWebsite;
    }

    /**
     * @param string $urlWebsite
     *
     * @return $this
     */
    public function setUrlWebsite(?string $urlWebsite)
    {
        $this->urlWebsite = $urlWebsite;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiUser(): ?string
    {
        return $this->apiUser;
    }

    /**
     * @param string $apiUser
     *
     * @return $this
     */
    public function setApiUser(?string $apiUser)
    {
        $this->apiUser = $apiUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @return $this
     */
    public function setApiKey(?string $apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id = null): self
    {
        $this->id = $id;

        return $this;
    }

    public function getBody()
    {
        return [];
    }

    public function getHeaders()
    {
        return [];
    }

    public function getParameters()
    {
        return [];
    }

    public function getVersion(): ?string
    {
        return null;
    }
}
