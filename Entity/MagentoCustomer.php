<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoCustomer
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
     * @Serializer\SerializedName("website_id")
     */
    protected $websiteId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     */
    protected $email;
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("group_id")
     */
    protected $groupId;
    /**
     * @var \DateTime
     * @Serializer\Type("CustomerDateTime")
     * @Serializer\SerializedName("created_at")
     */
    protected $createdAt;
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("disable_auto_group_change")
     */
    protected $disableAutoGroupChange;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastname")
     */
    protected $lastname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstname")
     */
    protected $firstname;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created_in")
     */
    protected $createdIn;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function isDisableAutoGroupChange(): ?bool
    {
        return $this->disableAutoGroupChange;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function getCreatedIn(): ?string
    {
        return $this->createdIn;
    }
}
