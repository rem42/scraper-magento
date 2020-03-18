<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoComment
{
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_customer_notified")
     */
    protected $isCustomerNotified;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_visible_on_front")
     */
    protected $isVisibleOnFront;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("comment")
     */
    protected $comment;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("created_at")
     */
    protected $createdAt;

    public function isCustomerNotified(): ?bool
    {
        return $this->isCustomerNotified;
    }

    public function isVisibleOnFront(): ?bool
    {
        return $this->isVisibleOnFront;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
}
