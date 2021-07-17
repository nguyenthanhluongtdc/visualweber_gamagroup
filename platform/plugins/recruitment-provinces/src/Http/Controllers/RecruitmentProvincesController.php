<?php

namespace Platform\RecruitmentProvinces\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\RecruitmentProvinces\Http\Requests\RecruitmentProvincesRequest;
use Platform\RecruitmentProvinces\Repositories\Interfaces\RecruitmentProvincesInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\RecruitmentProvinces\Tables\RecruitmentProvincesTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\RecruitmentProvinces\Forms\RecruitmentProvincesForm;
use Platform\Base\Forms\FormBuilder;

class RecruitmentProvincesController extends BaseController
{
    /**
     * @var RecruitmentProvincesInterface
     */
    protected $recruitmentProvincesRepository;

    /**
     * @param RecruitmentProvincesInterface $recruitmentProvincesRepository
     */
    public function __construct(RecruitmentProvincesInterface $recruitmentProvincesRepository)
    {
        $this->recruitmentProvincesRepository = $recruitmentProvincesRepository;
    }

    /**
     * @param RecruitmentProvincesTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(RecruitmentProvincesTable $table)
    {
        page_title()->setTitle(trans('plugins/recruitment-provinces::recruitment-provinces.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/recruitment-provinces::recruitment-provinces.create'));

        return $formBuilder->create(RecruitmentProvincesForm::class)->renderForm();
    }

    /**
     * @param RecruitmentProvincesRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(RecruitmentProvincesRequest $request, BaseHttpResponse $response)
    {
        $recruitmentProvinces = $this->recruitmentProvincesRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(RECRUITMENT_PROVINCES_MODULE_SCREEN_NAME, $request, $recruitmentProvinces));

        return $response
            ->setPreviousUrl(route('recruitment-provinces.index'))
            ->setNextUrl(route('recruitment-provinces.edit', $recruitmentProvinces->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $recruitmentProvinces = $this->recruitmentProvincesRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $recruitmentProvinces));

        page_title()->setTitle(trans('plugins/recruitment-provinces::recruitment-provinces.edit') . ' "' . $recruitmentProvinces->name . '"');

        return $formBuilder->create(RecruitmentProvincesForm::class, ['model' => $recruitmentProvinces])->renderForm();
    }

    /**
     * @param int $id
     * @param RecruitmentProvincesRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, RecruitmentProvincesRequest $request, BaseHttpResponse $response)
    {
        $recruitmentProvinces = $this->recruitmentProvincesRepository->findOrFail($id);

        $recruitmentProvinces->fill($request->input());

        $recruitmentProvinces = $this->recruitmentProvincesRepository->createOrUpdate($recruitmentProvinces);

        event(new UpdatedContentEvent(RECRUITMENT_PROVINCES_MODULE_SCREEN_NAME, $request, $recruitmentProvinces));

        return $response
            ->setPreviousUrl(route('recruitment-provinces.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $recruitmentProvinces = $this->recruitmentProvincesRepository->findOrFail($id);

            $this->recruitmentProvincesRepository->delete($recruitmentProvinces);

            event(new DeletedContentEvent(RECRUITMENT_PROVINCES_MODULE_SCREEN_NAME, $request, $recruitmentProvinces));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $recruitmentProvinces = $this->recruitmentProvincesRepository->findOrFail($id);
            $this->recruitmentProvincesRepository->delete($recruitmentProvinces);
            event(new DeletedContentEvent(RECRUITMENT_PROVINCES_MODULE_SCREEN_NAME, $request, $recruitmentProvinces));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
