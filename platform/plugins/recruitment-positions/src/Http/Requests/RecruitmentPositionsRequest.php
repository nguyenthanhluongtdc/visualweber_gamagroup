<?php

namespace Platform\RecruitmentPositions\Http\Requests;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class RecruitmentPositionsRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'job'   => 'required',
            'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
