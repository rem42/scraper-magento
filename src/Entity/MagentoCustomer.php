<?php

namespace Scraper\ScraperMagento\Entity;

class MagentoCustomer
{
    private ?int $entityId = null;

    private ?int $websiteId = null;

    private ?string $email = null;

    private ?int $groupId = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?bool $disableAutoGroupChange = null;

    private ?string $lastname = null;

    private ?string $firstname = null;

    private ?string $createdIn = null;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }


    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }


    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }


    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }


    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;

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

    public function getDisableAutoGroupChange(): ?bool
    {
        return $this->disableAutoGroupChange;
    }


    public function setDisableAutoGroupChange(?bool $disableAutoGroupChange): self
    {
        $this->disableAutoGroupChange = $disableAutoGroupChange;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }


    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }


    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getCreatedIn(): ?string
    {
        return $this->createdIn;
    }


    public function setCreatedIn(?string $createdIn): self
    {
        $this->createdIn = $createdIn;

        return $this;
    }
}
