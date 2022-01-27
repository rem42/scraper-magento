<?php

namespace Scraper\ScraperMagento\Entity;

final class MagentoRem42Address
{

    private ?int $socolissimoMethodId = null;

    private ?string $socolissimoMethodName = null;

    private ?string $socolissimoRelayId = null;

    private ?string $socolissimoDeliveryMode = null;

    private ?string $socolissimoCode = null;

    public function getSocolissimoMethodId(): ?int
    {
        return $this->socolissimoMethodId;
    }


    public function setSocolissimoMethodId(?int $socolissimoMethodId): self
    {
        $this->socolissimoMethodId = $socolissimoMethodId;

        return $this;
    }

    public function getSocolissimoMethodName(): ?string
    {
        return $this->socolissimoMethodName;
    }


    public function setSocolissimoMethodName(?string $socolissimoMethodName): self
    {
        $this->socolissimoMethodName = $socolissimoMethodName;

        return $this;
    }

    public function getSocolissimoRelayId(): ?string
    {
        return $this->socolissimoRelayId;
    }


    public function setSocolissimoRelayId(?string $socolissimoRelayId): self
    {
        $this->socolissimoRelayId = $socolissimoRelayId;

        return $this;
    }

    public function getSocolissimoDeliveryMode(): ?string
    {
        return $this->socolissimoDeliveryMode;
    }


    public function setSocolissimoDeliveryMode(?string $socolissimoDeliveryMode): self
    {
        $this->socolissimoDeliveryMode = $socolissimoDeliveryMode;

        return $this;
    }

    public function getSocolissimoCode(): ?string
    {
        return $this->socolissimoCode;
    }


    public function setSocolissimoCode(?string $socolissimoCode): self
    {
        $this->socolissimoCode = $socolissimoCode;

        return $this;
    }
}
