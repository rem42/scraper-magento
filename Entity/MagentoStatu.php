<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoStatu
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("label")
     */
    protected $label;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }
}
