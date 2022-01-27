<?php

namespace Scraper\ScraperMagento\Handler;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;

class CustomerHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'CustomerDateTime',
                'method' => 'deserializeDateTime',
            ],
        ];
    }

    public function deserializeDateTime(JsonDeserializationVisitor $visitor, $data, array $type, Context $context)
    {
        if (4 == $context->getDepth()) {
            return \DateTime::createFromFormat('Y-m-d H:i:s', $data);
        } else {
            return \DateTime::createFromFormat('Y-m-d\TH:i:sO', $data);
        }
    }
}
