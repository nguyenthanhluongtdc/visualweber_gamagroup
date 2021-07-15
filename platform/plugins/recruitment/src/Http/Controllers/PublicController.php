<?php

namespace Platform\RecruitmentContact\Http\Controllers;

use Exception;
use EmailHandler;
use Platform\Contact\Events\SentContactEvent;
use Platform\Base\Http\Controllers\BaseController;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Recruitment\Http\Requests\RecruitmentRequest;
use Platform\RecruitmentContact\Forms\RecruitmentContactForm;
use Platform\RecruitmentContact\Http\Requests\RecruitmentContactRequest;
use Platform\RecruitmentContact\Repositories\Interfaces\RecruitmentInterface;

class PublicController extends BaseController
{
    public function sendContact(RecruitmentRequest $request,BaseHttpResponse $response)
    {
        dd('xxx');
        // try {
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
            EmailHandler::setModule(CONTACT_MODULE_SCREEN_NAME)
                    ->setVariableValues([
                        'contact_name'    => $contact->name ?? 'N/A',
                        'contact_email'   => $contact->email ?? 'N/A',
                        'contact_phone'   => $contact->number ?? 'N/A',
                        'contact_content' => $contact->content ?? 'N/A',
                    ])
                    ->sendUsingTemplate('email');
                    EmailHandler::send('content', 'Tuyển dụng gamagroup', ['name' => 'gamagroup', 'to' =>$request->company_email]);
            return $response->setMessage(__('Gửi thành công!'));
        // } catch (Exception $exception) {
            info($exception->getMessage());
            return $response
                ->setError()
                ->setMessage(trans('plugins/contact::contact.email.failed'));
        // }
    }
}
