<?php

namespace Platform\RecruitmentCompanie\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\RecruitmentCompanie\Http\Requests\RecruitmentCompanieRequest;
use Platform\RecruitmentCompanie\Repositories\Interfaces\RecruitmentCompanieInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\RecruitmentCompanie\Tables\RecruitmentCompanieTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\RecruitmentCompanie\Forms\RecruitmentCompanieForm;
use Platform\Base\Forms\FormBuilder;

class RecruitmentCompanieController extends BaseController
{
    /**
     * @var RecruitmentCompanieInterface
     */
    protected $recruitmentCompanieRepository;

    /**
     * @param RecruitmentCompanieInterface $recruitmentCompanieRepository
     */
    public function __construct(RecruitmentCompanieInterface $recruitmentCompanieRepository)
    {
        $this->recruitmentCompanieRepository = $recruitmentCompanieRepository;
    }

    /**
     * @param RecruitmentCompanieTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(RecruitmentCompanieTable $table)
    {
        page_title()->setTitle(trans('plugins/recruitment-companie::recruitment-companie.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/recruitment-companie::recruitment-companie.create'));

        return $formBuilder->create(RecruitmentCompanieForm::class)->renderForm();
    }

    /**
     * @param RecruitmentCompanieRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(RecruitmentCompanieRequest $request, BaseHttpResponse $response)
    {
        $recruitmentCompanie = $this->recruitmentCompanieRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(RECRUITMENT_COMPANIE_MODULE_SCREEN_NAME, $request, $recruitmentCompanie));

        return $response
            ->setPreviousUrl(route('recruitment-companie.index'))
            ->setNextUrl(route('recruitment-companie.edit', $recruitmentCompanie->id))
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
        $recruitmentCompanie = $this->recruitmentCompanieRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $recruitmentCompanie));

        page_title()->setTitle(trans('plugins/recruitment-companie::recruitment-companie.edit') . ' "' . $recruitmentCompanie->name . '"');

        return $formBuilder->create(RecruitmentCompanieForm::class, ['model' => $recruitmentCompanie])->renderForm();
    }

    /**
     * @param int $id
     * @param RecruitmentCompanieRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, RecruitmentCompanieRequest $request, BaseHttpResponse $response)
    {
        $recruitmentCompanie = $this->recruitmentCompanieRepository->findOrFail($id);

        $recruitmentCompanie->fill($request->input());

        $recruitmentCompanie = $this->recruitmentCompanieRepository->createOrUpdate($recruitmentCompanie);

        event(new UpdatedContentEvent(RECRUITMENT_COMPANIE_MODULE_SCREEN_NAME, $request, $recruitmentCompanie));

        return $response
            ->setPreviousUrl(route('recruitment-companie.index'))
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
            $recruitmentCompanie = $this->recruitmentCompanieRepository->findOrFail($id);

            $this->recruitmentCompanieRepository->delete($recruitmentCompanie);

            event(new DeletedContentEvent(RECRUITMENT_COMPANIE_MODULE_SCREEN_NAME, $request, $recruitmentCompanie));

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
            $recruitmentCompanie = $this->recruitmentCompanieRepository->findOrFail($id);
            $this->recruitmentCompanieRepository->delete($recruitmentCompanie);
            event(new DeletedContentEvent(RECRUITMENT_COMPANIE_MODULE_SCREEN_NAME, $request, $recruitmentCompanie));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
