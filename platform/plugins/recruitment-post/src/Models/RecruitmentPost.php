<?php

namespace Platform\RecruitmentPost\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Platform\RecruitmentCompanie\Models\RecruitmentCompanie;
use Platform\RecruitmentProvinces\Models\RecruitmentProvinces;
//use Platform\RecruitmentCompanie\Http\Controllers\RecruitmentCompanyController;



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
     /**
     * @return BelongsTo
     */
    public function companies() :BelongsTo
    {
        return $this->belongsTo(RecruitmentCompanie::class, 'company');
    }

    /**
     * @return BelongsTo
     */
    public function city() :BelongsTo
    {
        return $this->belongsTo(RecruitmentProvinces::class, 'city');
    }
}
