<?php

namespace Scraper\ScraperMagento\Entity;

final class MagentoAddress
{
    private ?int $entityId = null;

    private ?string $lastname = null;

    private ?string $firstname = null;

    private ?string $email = null;

    private ?string $telephone = null;

    private ?string $company = null;

    private ?string $postcode = null;

    private ?string $city = null;

    private ?string $countryId = null;

    private ?string $region = null;

    private ?string $street = null;

    private ?bool $isDefaultBilling = null;

    private ?bool $isDefaultShipping = null;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }


    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }


    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }


    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }


    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }


    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }


    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }


    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }


    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }


    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getIsDefaultBilling(): ?bool
    {
        return $this->isDefaultBilling;
    }


    public function setIsDefaultBilling(?bool $isDefaultBilling): self
    {
        $this->isDefaultBilling = $isDefaultBilling;

        return $this;
    }

    public function getIsDefaultShipping(): ?bool
    {
        return $this->isDefaultShipping;
    }


    public function setIsDefaultShipping(?bool $isDefaultShipping): self
    {
        $this->isDefaultShipping = $isDefaultShipping;

        return $this;
    }
}
