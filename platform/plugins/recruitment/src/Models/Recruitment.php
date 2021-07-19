<?php

namespace Platform\Recruitment\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class Recruitment extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recruitments';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
        'email',
        'phone',
        'address',
        'job',
        'cv',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
