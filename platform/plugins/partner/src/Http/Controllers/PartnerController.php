<?php

namespace Platform\Partner\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Partner\Http\Requests\PartnerRequest;
use Platform\Partner\Repositories\Interfaces\PartnerInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\Partner\Tables\PartnerTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Partner\Forms\PartnerForm;
use Platform\Base\Forms\FormBuilder;

class PartnerController extends BaseController
{
    /**
     * @var PartnerInterface
     */
    protected $partnerRepository;

    /**
     * @param PartnerInterface $partnerRepository
     */
    public function __construct(PartnerInterface $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    /**
     * @param PartnerTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(PartnerTable $table)
    {
        page_title()->setTitle(trans('plugins/partner::partner.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/partner::partner.create'));

        return $formBuilder->create(PartnerForm::class)->renderForm();
    }

    /**
     * @param PartnerRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(PartnerRequest $request, BaseHttpResponse $response)
    {
        $partner = $this->partnerRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(PARTNER_MODULE_SCREEN_NAME, $request, $partner));

        return $response
            ->setPreviousUrl(route('partner.index'))
            ->setNextUrl(route('partner.edit', $partner->id))
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
        $partner = $this->partnerRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $partner));

        page_title()->setTitle(trans('plugins/partner::partner.edit') . ' "' . $partner->name . '"');

        return $formBuilder->create(PartnerForm::class, ['model' => $partner])->renderForm();
    }

    /**
     * @param int $id
     * @param PartnerRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, PartnerRequest $request, BaseHttpResponse $response)
    {
        $partner = $this->partnerRepository->findOrFail($id);

        $partner->fill($request->input());

        $partner = $this->partnerRepository->createOrUpdate($partner);

        event(new UpdatedContentEvent(PARTNER_MODULE_SCREEN_NAME, $request, $partner));

        return $response
            ->setPreviousUrl(route('partner.index'))
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
            $partner = $this->partnerRepository->findOrFail($id);

            $this->partnerRepository->delete($partner);

            event(new DeletedContentEvent(PARTNER_MODULE_SCREEN_NAME, $request, $partner));

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
            $partner = $this->partnerRepository->findOrFail($id);
            $this->partnerRepository->delete($partner);
            event(new DeletedContentEvent(PARTNER_MODULE_SCREEN_NAME, $request, $partner));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
