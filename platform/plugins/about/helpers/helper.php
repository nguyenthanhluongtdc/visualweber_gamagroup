<?php

use Platform\About\Models\About;
use Platform\About\Repositories\Interfaces\AboutInterface;
use Platform\Base\Enums\BaseStatusEnum;

if (!function_exists('get_featured_abouts')) {
    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_featured_abouts($limit)
    {
        return app(AboutInterface::class)->getAboutFeatured($limit);
    }
}