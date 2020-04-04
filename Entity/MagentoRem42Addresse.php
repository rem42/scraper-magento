<?php

namespace Scraper\ScraperMagento\Entity;

use JMS\Serializer\Annotation as Serializer;

class MagentoRem42Addresse
{
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("socolissimo_method_id")
     */
    protected $socolissimoMethodId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("socolissimo_method_name")
     */
    protected $socolissimoMethodName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("socolissimo_relay_id")
     */
    protected $socolissimoRelayId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("socolissimo_delivery_mode")
     */
    protected $socolissimoDeliveryMode;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("socolissimo_code")
     */
    protected $socolissimoCode;
}
