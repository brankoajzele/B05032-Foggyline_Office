<?php

namespace Foggyline\Office\Model;

class Cache extends \Magento\Framework\Cache\Frontend\Decorator\TagScope
{
    const TYPE_IDENTIFIER = 'foggyline_office';

    const CACHE_TAG = 'OFFICE';

    public function __construct(
        \Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool
    )
    {
        parent::__construct(
            $cacheFrontendPool->get(self::TYPE_IDENTIFIER), self::CACHE_TAG
        );
    }
}
