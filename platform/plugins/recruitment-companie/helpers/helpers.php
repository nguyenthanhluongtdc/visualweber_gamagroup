<?php

use Platform\Base\Enums\BaseStatusEnum;
use Platform\RecruitmentCompanie\Repositories\Interfaces\RecruitmentCompanieInterface;

if (!function_exists('get_provinces_for_form')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_provinces_for_form()
    {
        $provinces = app(RecruitmentCompanieInterface::class)
            ->getAllForForm(['status' => BaseStatusEnum::PUBLISHED]);

        return $provinces;
    }
}

if (!function_exists('get_recruitment_provinces_by_id')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_recruitment_provinces_by_id($id)
    {
        $provinces = app(RecruitmentCompanieInterface::class)
            ->getById($id);

        return $provinces;
    }
}