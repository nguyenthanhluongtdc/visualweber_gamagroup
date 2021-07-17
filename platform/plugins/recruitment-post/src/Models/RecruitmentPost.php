<?php

namespace Platform\RecruitmentPost\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;

class RecruitmentPost extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recruitment_posts';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'experience',
        'describe',
        'Responsibility',
        'expire',
        'status',
        'company',
         'type', 
         'location',
          'department', 
          'timework'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
