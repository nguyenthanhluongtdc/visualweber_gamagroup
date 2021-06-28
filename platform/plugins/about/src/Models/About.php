<?php

namespace Platform\About\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;
class About extends BaseModel
{
    use EnumCastable;
    use SlugTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_abouts';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
        'is_featured',
        'description',
        'content',
        'image',

    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
