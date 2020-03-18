<?php

namespace Scraper\ScraperMagento\Soap;

use JMS\Serializer\Annotation as Serializer;

class MagentoStatusHistory
{
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\SerializedName("parent_id")
     */
    protected $parentId;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\SerializedName("created_at")
     */
    protected $createdAt;
    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_customer_notified")
     */
    protected $isCustomerNotified;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;

    /**
     * @return int
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return bool
     */
    public function isCustomerNotified(): ?bool
    {
        return $this->isCustomerNotified;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
}
