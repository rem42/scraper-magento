<?php

namespace Scraper\ScraperMagento\Entity;

class MagentoComment
{
    private ?bool $isCustomerNotified = null;

    private ?bool $isVisibleOnFront = null;

    private ?string $comment = null;

    private ?string $status = null;

    private ?\DateTimeInterface $createdAt = null;

    public function getIsCustomerNotified(): ?bool
    {
        return $this->isCustomerNotified;
    }


    public function setIsCustomerNotified(?bool $isCustomerNotified): self
    {
        $this->isCustomerNotified = $isCustomerNotified;

        return $this;
    }

    public function getIsVisibleOnFront(): ?bool
    {
        return $this->isVisibleOnFront;
    }


    public function setIsVisibleOnFront(?bool $isVisibleOnFront): self
    {
        $this->isVisibleOnFront = $isVisibleOnFront;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }


    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }


    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }


    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
