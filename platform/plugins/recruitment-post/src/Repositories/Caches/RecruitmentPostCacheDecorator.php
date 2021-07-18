<?php

namespace Platform\RecruitmentPost\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\RecruitmentPost\Repositories\Interfaces\RecruitmentPostInterface;

class RecruitmentPostCacheDecorator extends CacheAbstractDecorator implements RecruitmentPostInterface
{
/**
     * {@inheritDoc}
     */
    public function getAll($paginate = 10, $active = true)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getAllForFilter()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
