<?php

namespace Platform\RecruitmentProvinces\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\RecruitmentProvinces\Repositories\Interfaces\RecruitmentProvincesInterface;

class RecruitmentProvincesCacheDecorator extends CacheAbstractDecorator implements RecruitmentProvincesInterface
{
 /**
     * {@inheritDoc}
     */
    public function getAddForForm($active = true)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
