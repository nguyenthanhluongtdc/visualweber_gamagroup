<?php

namespace Platform\Recruitment\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Recruitment\Http\Requests\RecruitmentRequest;
use Platform\Recruitment\Repositories\Interfaces\RecruitmentInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
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
        Log::info('--- Start upload cv ---');
        $file = \RvMedia::handleUpload($request->file('cv'), 0, 'cv');

        Log::debug($file);

        if (Arr::get($file, "error", true)) {
            Log::error('Cv tải lên không thành công');
            return redirect()->back()
                ->with('error_msg', __("plugins/recruitment::recruitment.Cv tải lên không thành công"));
        }

        $data = $request->all();
        Log::info($data);

        $data['cv'] = Arr::get($file, 'data', collect())->resource->url ?? null;

        $recruitment = $this->recruitmentRepository->create($data);
        Log::info($recruitment);

        Log::info('Đã gửi cv thành công');
        return redirect()->back()
            ->with('success_msg', __('plugins/recruitment::recruitment.Đã gửi cv thành công'));
    }
}
