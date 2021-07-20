<?php

namespace Platform\Recruitment\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Media\Models\MediaFile;
use Platform\RecruitmentPost\Models\RecruitmentPost;

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

    public function media(): BelongsTo
    {
        return $this->belongsTo(MediaFile::class, 'cv', 'url');
    }

    public function recruitmentPost(): BelongsTo
    {
        return $this->belongsTo(RecruitmentPost::class, 'job', 'id');
    }
}
