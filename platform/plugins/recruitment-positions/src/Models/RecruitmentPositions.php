<?php

namespace Platform\RecruitmentPositions\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class RecruitmentPositions extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_recruitment_positions';

    /**
     * @var array
     */
    protected $fillable = [
        'job',
        'company',
        'address',
        'expiration_date',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
