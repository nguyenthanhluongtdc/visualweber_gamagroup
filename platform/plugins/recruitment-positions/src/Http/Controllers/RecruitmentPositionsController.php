<?php

namespace Platform\RecruitmentPositions\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\RecruitmentPositions\Http\Requests\RecruitmentPositionsRequest;
use Platform\RecruitmentPositions\Repositories\Interfaces\RecruitmentPositionsInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\RecruitmentPositions\Tables\RecruitmentPositionsTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\RecruitmentPositions\Forms\RecruitmentPositionsForm;
use Platform\Base\Forms\FormBuilder;

class RecruitmentPositionsController extends BaseController
{
    /**
     * @var RecruitmentPositionsInterface
     */
    protected $recruitmentPositionsRepository;

    /**
     * @param RecruitmentPositionsInterface $recruitmentPositionsRepository
     */
    public function __construct(RecruitmentPositionsInterface $recruitmentPositionsRepository)
    {
        $this->recruitmentPositionsRepository = $recruitmentPositionsRepository;
    }

    /**
     * @param RecruitmentPositionsTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(RecruitmentPositionsTable $table)
    {
        page_title()->setTitle(trans('plugins/recruitment-positions::recruitment-positions.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/recruitment-positions::recruitment-positions.create'));

        return $formBuilder->create(RecruitmentPositionsForm::class)->renderForm();
    }

    /**
     * @param RecruitmentPositionsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(RecruitmentPositionsRequest $request, BaseHttpResponse $response)
    {
        $recruitmentPositions = $this->recruitmentPositionsRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(RECRUITMENT_POSITIONS_MODULE_SCREEN_NAME, $request, $recruitmentPositions));

        return $response
            ->setPreviousUrl(route('recruitment-positions.index'))
            ->setNextUrl(route('recruitment-positions.edit', $recruitmentPositions->id))
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
        $recruitmentPositions = $this->recruitmentPositionsRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $recruitmentPositions));

        page_title()->setTitle(trans('plugins/recruitment-positions::recruitment-positions.edit') . ' "' . $recruitmentPositions->name . '"');

        return $formBuilder->create(RecruitmentPositionsForm::class, ['model' => $recruitmentPositions])->renderForm();
    }

    /**
     * @param int $id
     * @param RecruitmentPositionsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, RecruitmentPositionsRequest $request, BaseHttpResponse $response)
    {
        $recruitmentPositions = $this->recruitmentPositionsRepository->findOrFail($id);

        $recruitmentPositions->fill($request->input());

        $recruitmentPositions = $this->recruitmentPositionsRepository->createOrUpdate($recruitmentPositions);

        event(new UpdatedContentEvent(RECRUITMENT_POSITIONS_MODULE_SCREEN_NAME, $request, $recruitmentPositions));

        return $response
            ->setPreviousUrl(route('recruitment-positions.index'))
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
            $recruitmentPositions = $this->recruitmentPositionsRepository->findOrFail($id);

            $this->recruitmentPositionsRepository->delete($recruitmentPositions);

            event(new DeletedContentEvent(RECRUITMENT_POSITIONS_MODULE_SCREEN_NAME, $request, $recruitmentPositions));

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
            $recruitmentPositions = $this->recruitmentPositionsRepository->findOrFail($id);
            $this->recruitmentPositionsRepository->delete($recruitmentPositions);
            event(new DeletedContentEvent(RECRUITMENT_POSITIONS_MODULE_SCREEN_NAME, $request, $recruitmentPositions));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
