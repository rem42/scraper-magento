<?php

namespace Scraper\ScraperMagento\Request;

class MagentoSalesOrderShipmentAddTrackSoapRequest extends MagentoSoapRequest
{
    /** @var string */
    protected $shipmentIncrementId;
    /** @var string */
    protected $carrier;
    /** @var string */
    protected $title;
    /** @var string */
    protected $trackNumber;

    public function getAction(): string
    {
        return 'salesOrderShipmentAddTrack';
    }

    public function setShipmentIncrementId(?string $shipmentIncrementId = null): self
    {
        $this->shipmentIncrementId = $shipmentIncrementId;

        return $this;
    }

    public function setCarrier(?string $carrier = null): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    public function setTitle(?string $title = null): self
    {
        $this->title = $title;

        return $this;
    }

    public function setTrackNumber(?string $trackNumber = null): self
    {
        $this->trackNumber = $trackNumber;

        return $this;
    }

    public function isRequestSpecific(): bool
    {
        return true;
    }

    public function sendRequest(\SoapClient $client, $sessionId)
    {
        return $client->{$this->getAction()}($sessionId, $this->shipmentIncrementId, $this->carrier, $this->title, $this->trackNumber);
    }
}
