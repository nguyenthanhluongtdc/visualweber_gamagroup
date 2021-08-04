<?php

namespace Platform\CandidatePosition\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\CandidatePosition\Http\Requests\CandidatePositionRequest;
use Platform\CandidatePosition\Repositories\Interfaces\CandidatePositionInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\CandidatePosition\Tables\CandidatePositionTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\CandidatePosition\Forms\CandidatePositionForm;
use Platform\Base\Forms\FormBuilder;

class CandidatePositionController extends BaseController
{
    /**
     * @var CandidatePositionInterface
     */
    protected $candidatePositionRepository;

    /**
     * @param CandidatePositionInterface $candidatePositionRepository
     */
    public function __construct(CandidatePositionInterface $candidatePositionRepository)
    {
        $this->candidatePositionRepository = $candidatePositionRepository;
    }

    /**
     * @param CandidatePositionTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(CandidatePositionTable $table)
    {
        page_title()->setTitle(trans('plugins/candidate-position::candidate-position.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/candidate-position::candidate-position.create'));

        return $formBuilder->create(CandidatePositionForm::class)->renderForm();
    }

    /**
     * @param CandidatePositionRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(CandidatePositionRequest $request, BaseHttpResponse $response)
    {
        $candidatePosition = $this->candidatePositionRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(CANDIDATE_POSITION_MODULE_SCREEN_NAME, $request, $candidatePosition));

        return $response
            ->setPreviousUrl(route('candidate-position.index'))
            ->setNextUrl(route('candidate-position.edit', $candidatePosition->id))
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
        $candidatePosition = $this->candidatePositionRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $candidatePosition));

        page_title()->setTitle(trans('plugins/candidate-position::candidate-position.edit') . ' "' . $candidatePosition->name . '"');

        return $formBuilder->create(CandidatePositionForm::class, ['model' => $candidatePosition])->renderForm();
    }

    /**
     * @param int $id
     * @param CandidatePositionRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, CandidatePositionRequest $request, BaseHttpResponse $response)
    {
        $candidatePosition = $this->candidatePositionRepository->findOrFail($id);

        $candidatePosition->fill($request->input());

        $candidatePosition = $this->candidatePositionRepository->createOrUpdate($candidatePosition);

        event(new UpdatedContentEvent(CANDIDATE_POSITION_MODULE_SCREEN_NAME, $request, $candidatePosition));

        return $response
            ->setPreviousUrl(route('candidate-position.index'))
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
            $candidatePosition = $this->candidatePositionRepository->findOrFail($id);

            $this->candidatePositionRepository->delete($candidatePosition);

            event(new DeletedContentEvent(CANDIDATE_POSITION_MODULE_SCREEN_NAME, $request, $candidatePosition));

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
            $candidatePosition = $this->candidatePositionRepository->findOrFail($id);
            $this->candidatePositionRepository->delete($candidatePosition);
            event(new DeletedContentEvent(CANDIDATE_POSITION_MODULE_SCREEN_NAME, $request, $candidatePosition));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
