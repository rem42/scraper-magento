<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

abstract class MagentoAbstractList
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("key")
     */
    protected $key;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("value")
     */
    protected $value;

    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
}
