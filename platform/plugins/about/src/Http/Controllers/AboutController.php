<?php

namespace Platform\About\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\About\Http\Requests\AboutRequest;
use Platform\About\Repositories\Interfaces\AboutInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\About\Tables\AboutTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\About\Forms\AboutForm;
use Platform\Base\Forms\FormBuilder;

class AboutController extends BaseController
{
    /**
     * @var AboutInterface
     */
    protected $aboutRepository;

    /**
     * @param AboutInterface $aboutRepository
     */
    public function __construct(AboutInterface $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    /**
     * @param AboutTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(AboutTable $table)
    {
        page_title()->setTitle(trans('plugins/about::about.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/about::about.create'));

        return $formBuilder->create(AboutForm::class)->renderForm();
    }

    /**
     * @param AboutRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(AboutRequest $request, BaseHttpResponse $response)
    {
        $about = $this->aboutRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(ABOUT_MODULE_SCREEN_NAME, $request, $about));

        return $response
            ->setPreviousUrl(route('about.index'))
            ->setNextUrl(route('about.edit', $about->id))
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
        $about = $this->aboutRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $about));

        page_title()->setTitle(trans('plugins/about::about.edit') . ' "' . $about->name . '"');

        return $formBuilder->create(AboutForm::class, ['model' => $about])->renderForm();
    }

    /**
     * @param int $id
     * @param AboutRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, AboutRequest $request, BaseHttpResponse $response)
    {
        $about = $this->aboutRepository->findOrFail($id);

        $about->fill($request->input());

        $this->aboutRepository->createOrUpdate($about);

        event(new UpdatedContentEvent(ABOUT_MODULE_SCREEN_NAME, $request, $about));

        return $response
            ->setPreviousUrl(route('about.index'))
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
            $about = $this->aboutRepository->findOrFail($id);

            $this->aboutRepository->delete($about);

            event(new DeletedContentEvent(ABOUT_MODULE_SCREEN_NAME, $request, $about));

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
            $about = $this->aboutRepository->findOrFail($id);
            $this->aboutRepository->delete($about);
            event(new DeletedContentEvent(ABOUT_MODULE_SCREEN_NAME, $request, $about));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
