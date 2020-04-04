<?php

namespace Scraper\ScraperMagento\Request;

class MagentoCatalogInventoryStockItemUpdateSoapRequest extends MagentoSoapRequest
{
    /** @var string */
    protected $productId;
    /** @var string */
    protected $quantity;

    public function getAction(): string
    {
        return 'catalogInventoryStockItemUpdate';
    }

    public function isRequestSpecific(): bool
    {
        return true;
    }

    public function setProductId(?string $productId = null): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function setQuantity(?string $quantity = null): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function sendRequest(\SoapClient $client, $sessionId)
    {
        return $client->{$this->getAction()}($sessionId, $this->productId, [
            'qty' => $this->quantity,
        ]);
    }
}
