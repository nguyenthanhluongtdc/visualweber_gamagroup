<?php

namespace Platform\RecruitmentCompanie\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\RecruitmentCompanie\Repositories\Interfaces\RecruitmentCompanieInterface;

class RecruitmentCompanieCacheDecorator extends CacheAbstractDecorator implements RecruitmentCompanieInterface
{

     /**
     * {@inheritDoc}
     */
    public function getAllForForm($active = true)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
     /**
     * {@inheritDoc}
     */
    public function getByProvince($provinceId, $active = true)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
