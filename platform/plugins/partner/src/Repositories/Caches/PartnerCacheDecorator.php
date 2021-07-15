<?php

namespace Platform\Partner\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\Partner\Repositories\Interfaces\PartnerInterface;

class PartnerCacheDecorator extends CacheAbstractDecorator implements PartnerInterface
{
    public function getPartnerFeatured(int $limit = 5)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
