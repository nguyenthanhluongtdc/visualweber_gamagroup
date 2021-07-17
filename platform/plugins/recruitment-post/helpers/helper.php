<?php
use Platform\Base\Enums\BaseStatusEnum;
use Platform\RecruitmentPost\Repositories\Interfaces\RecruitmentPostInterface;
use Platform\RecruitmentProvinces\Repositories\Interfaces\RecruitmentProvincesInterface;
use Platform\RecruitmentCompanie\Repositories\Interfaces\RecruitmentCompanieInterface;
use Platform\Recruitment\Repositories\Interfaces\RecruitmentInterface;

if (!function_exists('get_companies_for_form')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_companies_for_form()
    {
        $companies = app(RecruitmentCompanieInterface::class)
            ->getAllForForm(['status' => BaseStatusEnum::PUBLISHED]);

        return $companies;
    }
}


