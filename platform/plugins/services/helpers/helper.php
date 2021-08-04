<?php

use Platform\Services\Repositories\Interfaces\ServicesInterface;
use Platform\Base\Enums\BaseStatusEnum;

if (!function_exists('get_featured_service')) {
    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_featured_service($limit)
    {
        return app(ServicesInterface::class)->getServiceFeatured($limit);
    }
}