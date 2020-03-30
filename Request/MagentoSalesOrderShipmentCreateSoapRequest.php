<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderShipmentCreateSoapRequest extends MagentoSoapRequest
{
    /** @var string */
    protected $orderIncrementId;

    public function getAction(): string
    {
        return 'salesOrderShipmentCreate';
    }

    public function setOrderIncrementId(?string $orderIncrementId = null): self
    {
        $this->orderIncrementId = $orderIncrementId;

        return $this;
    }

    public function isRequestSpecific(): bool
    {
        return true;
    }

    public function sendRequest(\SoapClient $client, $sessionId)
    {
        return $client->{$this->getAction()}($sessionId, $this->orderIncrementId);
    }
}
