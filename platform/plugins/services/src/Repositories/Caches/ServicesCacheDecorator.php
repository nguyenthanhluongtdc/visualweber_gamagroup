<?php

namespace Platform\Services\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\Services\Repositories\Interfaces\ServicesInterface;

class ServicesCacheDecorator extends CacheAbstractDecorator implements ServicesInterface
{
    public function getServiceFeatured(int $limit = 5)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
