<?php

namespace Platform\About\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\About\Repositories\Interfaces\AboutInterface;

class AboutCacheDecorator extends CacheAbstractDecorator implements AboutInterface
{
    public function getAboutFeatured(int $limit = 4)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
