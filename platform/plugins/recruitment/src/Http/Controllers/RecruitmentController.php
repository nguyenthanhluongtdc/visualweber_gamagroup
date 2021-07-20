<?php

namespace Platform\Recruitment\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Recruitment\Http\Requests\RecruitmentRequest;
use Platform\Recruitment\Repositories\Interfaces\RecruitmentInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\Recruitment\Tables\RecruitmentTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Recruitment\Forms\RecruitmentForm;
use Platform\Base\Forms\FormBuilder;
use Platform\Contact\Events\SentContactEvent;

class RecruitmentController extends BaseController
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
     * @param RecruitmentTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(RecruitmentTable $table)
    {
        page_title()->setTitle(trans('plugins/recruitment::recruitment.name'));

        return $table->renderTable();
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $recruitment = $this->recruitmentRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $recruitment));

        page_title()->setTitle(trans('plugins/recruitment::recruitment.edit') . ' "' . $recruitment->name . '"');

        return $formBuilder->create(RecruitmentForm::class, ['model' => $recruitment])->renderForm();
    }

    /**
     * @param int $id
     * @param RecruitmentRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, RecruitmentRequest $request, BaseHttpResponse $response)
    {
        $recruitment = $this->recruitmentRepository->findOrFail($id);

        $recruitment->fill($request->input());

        $recruitment = $this->recruitmentRepository->createOrUpdate($recruitment);

        event(new UpdatedContentEvent(RECRUITMENT_MODULE_SCREEN_NAME, $request, $recruitment));

        return $response
            ->setPreviousUrl(route('recruitment.index'))
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
            $recruitment = $this->recruitmentRepository->findOrFail($id);

            $this->recruitmentRepository->delete($recruitment);

            event(new DeletedContentEvent(RECRUITMENT_MODULE_SCREEN_NAME, $request, $recruitment));

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
            $recruitment = $this->recruitmentRepository->findOrFail($id);
            $this->recruitmentRepository->delete($recruitment);
            event(new DeletedContentEvent(RECRUITMENT_MODULE_SCREEN_NAME, $request, $recruitment));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }

    public function sendContact(RecruitmentRequest $request,BaseHttpResponse $response)
    {

        try {
            $originalName = $request->file('cv')->getClientOriginalName();
            $filename = \Str::random(5).'-'.\Str::slug($request->post).'-'.$originalName;

            $contact = app(RecruitmentInterface::class)->getModel();
            $contact->fill($request->input());
            $contact->fill([
                'cv' => $filename,
            ]);
            
            app(RecruitmentInterface::class)->createOrUpdate($contact);
            event(new SentContactEvent($contact));
            if ($request->hasFile('cv')) {
                $request->file('cv')->storeAs('cv', $filename, 'file_cv');
            }
            // dd($request);
            // EmailHandler::setModule(CONTACT_MODULE_SCREEN_NAME)
            //         ->setVariableValues([
            //             'contact_name'    => $contact->name ?? 'N/A',
            //             'contact_email'   => $contact->email ?? 'N/A',
            //             'contact_phone'   => $contact->phone ?? 'N/A',
            //             'contact_content' => $contact->address ?? 'N/A',
            //         ])
            //         ->sendUsingTemplate('email');
            //         EmailHandler::send('content', 'Tuyển dụng gamagroup', ['name' => 'gamagroup', 'to' =>$request->company_email]);
            return $response->setMessage(__('Gửi thành công!'));

        } catch (Exception $exception) {
            info($exception->getMessage());
            return $response
                ->setError()
                ->setMessage(trans('plugins/contact::contact.email.failed'));
        }
    }
}
