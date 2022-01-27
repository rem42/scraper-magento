<?php

namespace Scraper\ScraperMagento\Entity;

final class MagentoProduct
{

    private ?int $entityId = null;

    private ?int $attributeSetId = null;

    private ?string $typeId = null;

    private ?string $sku = null;

    private ?int $manufacturer = null;

    private ?int $status = null;

    private ?int $visibility = null;

    private ?int $taxClassId = null;

    private ?bool $isImported = null;

    private ?float $weight = null;

    private ?float $price = null;

    private ?float $specialPrice = null;

    private ?float $cost = null;

    private ?float $operatingMargin = null;

    private ?string $name = null;

    private ?string $urlKey = null;

    private ?string $metaTitle = null;

    private ?string $metaDescription = null;

    private ?string $ean = null;

    private ?string $refFournisseur = null;

    private ?string $marque = null;

    private ?float $height = null;

    private ?float $width = null;

    private ?float $length = null;

    private ?string $description = null;

    private ?string $shortDescription = null;

    private ?string $metaKeyword = null;

    private ?string $features = null;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }


    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    public function getAttributeSetId(): ?int
    {
        return $this->attributeSetId;
    }


    public function setAttributeSetId(?int $attributeSetId): self
    {
        $this->attributeSetId = $attributeSetId;

        return $this;
    }

    public function getTypeId(): ?string
    {
        return $this->typeId;
    }


    public function setTypeId(?string $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }


    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getManufacturer(): ?int
    {
        return $this->manufacturer;
    }


    public function setManufacturer(?int $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }


    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getVisibility(): ?int
    {
        return $this->visibility;
    }


    public function setVisibility(?int $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }


    public function setTaxClassId(?int $taxClassId): self
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }


    public function setIsImported(?bool $isImported): self
    {
        $this->isImported = $isImported;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }


    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }


    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSpecialPrice(): ?float
    {
        return $this->specialPrice;
    }


    public function setSpecialPrice(?float $specialPrice): self
    {
        $this->specialPrice = $specialPrice;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }


    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getOperatingMargin(): ?float
    {
        return $this->operatingMargin;
    }


    public function setOperatingMargin(?float $operatingMargin): self
    {
        $this->operatingMargin = $operatingMargin;

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

    public function getUrlKey(): ?string
    {
        return $this->urlKey;
    }


    public function setUrlKey(?string $urlKey): self
    {
        $this->urlKey = $urlKey;

        return $this;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }


    public function setMetaTitle(?string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }


    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }


    public function setEan(?string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function getRefFournisseur(): ?string
    {
        return $this->refFournisseur;
    }


    public function setRefFournisseur(?string $refFournisseur): self
    {
        $this->refFournisseur = $refFournisseur;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }


    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }


    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }


    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }


    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }


    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }


    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getMetaKeyword(): ?string
    {
        return $this->metaKeyword;
    }


    public function setMetaKeyword(?string $metaKeyword): self
    {
        $this->metaKeyword = $metaKeyword;

        return $this;
    }

    public function getFeatures(): ?string
    {
        return $this->features;
    }


    public function setFeatures(?string $features): self
    {
        $this->features = $features;

        return $this;
    }
}
