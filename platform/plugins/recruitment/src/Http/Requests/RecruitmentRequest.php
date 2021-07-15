<?php

namespace Platform\Recruitment\Http\Requests;

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class RecruitmentRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'email'   => 'required|email',
            'phone'   => 'required|numeric',
            'address'   => 'required',
            'cv'   => 'required|max:2050|mimes:pdf,docx,doc,jpg,jpeg',
            // 'job'   => 'required',
            // 'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
