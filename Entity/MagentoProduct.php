<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoProduct
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("entity_id")
     */
    protected $entityId;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("attribute_set_id")
     */
    protected $attributeSetId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type_id")
     */
    protected $typeId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sku")
     */
    protected $sku;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("manufacturer")
     */
    protected $manufacturer;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("status")
     */
    protected $status;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("visibility")
     */
    protected $visibility;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("tax_class_id")
     */
    protected $taxClassId;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_imported")
     */
    protected $isImported;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight")
     */
    protected $weight;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("price")
     */
    protected $price;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("special_price")
     */
    protected $specialPrice;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("cost")
     */
    protected $cost;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("operating_margin")
     */
    protected $operatingMargin;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("url_key")
     */
    protected $urlKey;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("meta_title")
     */
    protected $metaTitle;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("meta_description")
     */
    protected $metaDescription;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ean")
     */
    protected $ean;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ref_fournisseur")
     */
    protected $refFournisseur;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("marque")
     */
    protected $marque;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("height")
     */
    protected $height;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("width")
     */
    protected $width;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("length")
     */
    protected $length;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    protected $description;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("short_description")
     */
    protected $shortDescription;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("meta_keyword")
     */
    protected $metaKeyword;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("features")
     */
    protected $features;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function getAttributeSetId(): ?int
    {
        return $this->attributeSetId;
    }

    public function getTypeId(): ?string
    {
        return $this->typeId;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function getManufacturer(): ?int
    {
        return $this->manufacturer;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function getVisibility(): ?int
    {
        return $this->visibility;
    }

    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }

    public function isImported(): ?bool
    {
        return $this->isImported;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function getSpecialPrice(): ?float
    {
        return $this->specialPrice;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function getOperatingMargin(): ?float
    {
        return $this->operatingMargin;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getUrlKey(): ?string
    {
        return $this->urlKey;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function getRefFournisseur(): ?string
    {
        return $this->refFournisseur;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function getMetaKeyword(): ?string
    {
        return $this->metaKeyword;
    }

    public function getFeatures(): ?string
    {
        return $this->features;
    }
}
