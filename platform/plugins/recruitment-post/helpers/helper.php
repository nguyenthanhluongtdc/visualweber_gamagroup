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

if (!function_exists('get_address_for_form')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_address_for_form()
    {
        $address = app(RecruitmentProvincesInterface::class)
            ->getAddForForm(['status' => BaseStatusEnum::PUBLISHED]);

        return $address;
    }
}


if (!function_exists('get_all_recruitments')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_all_recruitments($pageinate = 10)
    {
        $fields = app(RecruitmentPostInterface::class)
            ->getAll($pageinate, ['status' => BaseStatusEnum::PUBLISHED]);

        return $fields;
    }
}
if (!function_exists('get_all_recruitments_for_filter')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_all_recruitments_for_filter()
    {
        $fields = app(RecruitmentPostInterface::class)
            ->getAllForFilter();

        return $fields;
    }
}

