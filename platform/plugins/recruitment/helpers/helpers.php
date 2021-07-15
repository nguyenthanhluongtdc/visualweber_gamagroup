<?php

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Recruitment\Models\Recruitment;
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\Recruitment\Repositories\Interfaces\RecruitmentInterface;
use Platform\RecruitmentProvince\Repositories\Interfaces\RecruitmentProvinceInterface;

if (!function_exists('get_recruitment_by_slug')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_recruitment_by_slug($slug)
    {
        $slug = app(SlugInterface::class)->getFirstBy(['key'=> $slug, 'reference_type' => Recruitment::class]);
        $recruitment= app(RecruitmentInterface::class)->getFirstBy(['id' => $slug->reference_id]);

        return $recruitment;
    }
}