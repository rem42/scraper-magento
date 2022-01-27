<?php

namespace Scraper\ScraperMagento\Entity;

final class MagentoShipping
{

    private ?string $region = null;

    private ?string $postcode = null;

    private ?string $lastname = null;

    private ?string $street = null;

    private ?string $city = null;

    private ?string $email = null;

    private ?string $telephone = null;

    private ?string $countryId = null;

    private ?string $firstname = null;

    private ?string $addressType = null;

    private ?string $prefix = null;

    private ?string $middlename = null;

    private ?string $suffix = null;

    private ?string $company = null;

    public function getRegion(): ?string
    {
        return $this->region;
    }


    public function setRegion(?string $region): self
    {
        $this->region = $region;

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

    public function getLastname(): ?string
    {
        return $this->lastname;
    }


    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

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

    public function getCity(): ?string
    {
        return $this->city;
    }


    public function setCity(?string $city): self
    {
        $this->city = $city;

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

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }


    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;

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

    public function getAddressType(): ?string
    {
        return $this->addressType;
    }


    public function setAddressType(?string $addressType): self
    {
        $this->addressType = $addressType;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }


    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }


    public function setMiddlename(?string $middlename): self
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getSuffix(): ?string
    {
        return $this->suffix;
    }


    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;

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
}
