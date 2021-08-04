<?php

namespace Platform\RecruitmentPost\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\RecruitmentPost\Http\Requests\RecruitmentPostRequest;
use Platform\RecruitmentPost\Repositories\Interfaces\RecruitmentPostInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\RecruitmentPost\Tables\RecruitmentPostTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\RecruitmentPost\Forms\RecruitmentPostForm;
use Platform\Base\Forms\FormBuilder;

class RecruitmentPostController extends BaseController
{
    /**
     * @var RecruitmentPostInterface
     */
    protected $recruitmentPostRepository;

    /**
     * @param RecruitmentPostInterface $recruitmentPostRepository
     */
    public function __construct(RecruitmentPostInterface $recruitmentPostRepository)
    {
        $this->recruitmentPostRepository = $recruitmentPostRepository;
    }

    /**
     * @param RecruitmentPostTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(RecruitmentPostTable $table)
    {
        page_title()->setTitle(trans('plugins/recruitment-post::recruitment-post.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/recruitment-post::recruitment-post.create'));

        return $formBuilder->create(RecruitmentPostForm::class)->renderForm();
    }

    /**
     * @param RecruitmentPostRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(RecruitmentPostRequest $request, BaseHttpResponse $response)
    {
        $recruitmentPost = $this->recruitmentPostRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(RECRUITMENT_POST_MODULE_SCREEN_NAME, $request, $recruitmentPost));

        return $response
            ->setPreviousUrl(route('recruitment-post.index'))
            ->setNextUrl(route('recruitment-post.edit', $recruitmentPost->id))
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
        $recruitmentPost = $this->recruitmentPostRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $recruitmentPost));

        page_title()->setTitle(trans('plugins/recruitment-post::recruitment-post.edit') . ' "' . $recruitmentPost->name . '"');

        return $formBuilder->create(RecruitmentPostForm::class, ['model' => $recruitmentPost])->renderForm();
    }

    /**
     * @param int $id
     * @param RecruitmentPostRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, RecruitmentPostRequest $request, BaseHttpResponse $response)
    {
        $recruitmentPost = $this->recruitmentPostRepository->findOrFail($id);

        $recruitmentPost->fill($request->input());

        $recruitmentPost = $this->recruitmentPostRepository->createOrUpdate($recruitmentPost);

        event(new UpdatedContentEvent(RECRUITMENT_POST_MODULE_SCREEN_NAME, $request, $recruitmentPost));

        return $response
            ->setPreviousUrl(route('recruitment-post.index'))
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
            $recruitmentPost = $this->recruitmentPostRepository->findOrFail($id);

            $this->recruitmentPostRepository->delete($recruitmentPost);

            event(new DeletedContentEvent(RECRUITMENT_POST_MODULE_SCREEN_NAME, $request, $recruitmentPost));

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
            $recruitmentPost = $this->recruitmentPostRepository->findOrFail($id);
            $this->recruitmentPostRepository->delete($recruitmentPost);
            event(new DeletedContentEvent(RECRUITMENT_POST_MODULE_SCREEN_NAME, $request, $recruitmentPost));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
