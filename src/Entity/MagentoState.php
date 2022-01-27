<?php

namespace Scraper\ScraperMagento\Entity;

final class MagentoState
{

    private ?string $status = null;

    private ?string $label = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }


    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }


    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
