<?php

use Platform\Partner\Repositories\Interfaces\PartnerInterface;
use Platform\Base\Enums\BaseStatusEnum;

if (!function_exists('get_featured_partner')) {
    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_featured_partner($limit)
    {
        return app(PartnerInterface::class)->getPartnerFeatured($limit);
    }
}