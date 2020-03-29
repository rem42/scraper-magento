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

    public function sendReuest(\SoapClient $client, $sessionId)
    {
        return $client->{$this->getAction()}($sessionId, $this->orderIncrementId, $this->status);
    }
}
