<?php

namespace Scraper\ScraperMagento\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class MagentoStatus
{
    /**
     * @var ArrayCollection|MagentoStatu[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperMagento\Entity\MagentoStatu>")
     * @Serializer\SerializedName("status")
     */
    protected $status;

    /**
     * @return ArrayCollection|MagentoStatu[]|null
     */
    public function getStatus(): ?ArrayCollection
    {
        return $this->status;
    }
}
