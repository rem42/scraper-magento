<?php

namespace Scraper\ScraperMagento\Entity;

final class MagentoCarrier
{
    private ?string $id = null;

    private ?string $carrier = null;

    private ?string $type = null;

    private ?string$name;

    private ?string $shippingMethod = null;

    public function getId(): ?string
    {
        return $this->id;
    }


    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCarrier(): ?string
    {
        return $this->carrier;
    }


    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }


    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShippingMethod(): ?string
    {
        return $this->shippingMethod;
    }


    public function setShippingMethod(?string $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }
}
