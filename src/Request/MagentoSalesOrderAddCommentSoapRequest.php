<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderAddCommentSoapRequest extends MagentoSoapRequest
{
    /** @var string */
    protected $orderIncrementId;
    /** @var string */
    protected $status;

    public function getAction(): string
    {
        return 'salesOrderAddComment';
    }

    public function isRequestSpecific(): bool
    {
        return true;
    }

    public function setOrderIncrementId(?string $orderIncrementId = null): self
    {
        $this->orderIncrementId = $orderIncrementId;

        return $this;
    }

    public function setStatus(?string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    public function sendRequest(\SoapClient $client, $sessionId)
    {
        return $client->{$this->getAction()}($sessionId, $this->orderIncrementId, $this->status);
    }
}
