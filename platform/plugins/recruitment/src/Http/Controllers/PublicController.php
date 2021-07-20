<?php

namespace Platform\Recruitment\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Recruitment\Http\Requests\RecruitmentRequest;
use Platform\Recruitment\Repositories\Interfaces\RecruitmentInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Arr;
use Platform\Recruitment\Tables\RecruitmentTable;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Recruitment\Forms\RecruitmentForm;
use Platform\Base\Forms\FormBuilder;
use Platform\Contact\Events\SentContactEvent;

class PublicController extends BaseController
{
    /**
     * @var RecruitmentInterface
     */
    protected $recruitmentRepository;

    /**
     * @param RecruitmentInterface $recruitmentRepository
     */
    public function __construct(RecruitmentInterface $recruitmentRepository)
    {
        $this->recruitmentRepository = $recruitmentRepository;
    }

    /**
     * Send Contact
     *
     * @param RecruitmentRequest $request
     * @param BaseHttpResponse $response
     * @return void
     */
    public function sendContact(RecruitmentRequest $request, BaseHttpResponse $response)
    {
        $file = \RvMedia::handleUpload($request->file('cv'), 0, 'cv');

        if (Arr::get($file, "error", true)) {
            return redirect()->back()
                ->with('error_msg', __("Cv tải lên không thành công"));
        }

        $request->merge([
            "cv" => Arr::get($file, 'data', collect())->resource->url ?? null
        ]);

        $recruitment = $this->recruitmentRepository->create($request->all());

        return redirect()->back()
            ->with('success_msg', __('Đã gửi cv thành công'));
    }
}
