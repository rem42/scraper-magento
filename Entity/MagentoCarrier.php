<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoCarrier
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sub_type")
     */
    protected $subType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sub_name")
     */
    protected $subName;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getSubType(): ?string
    {
        return $this->subType;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getSubName(): ?string
    {
        return $this->subName;
    }
}
