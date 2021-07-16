<?php

namespace Platform\RecruitmentPositions\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\RecruitmentPositions\Http\Requests\RecruitmentPositionsRequest;
use Platform\RecruitmentPositions\Models\RecruitmentPositions;

class RecruitmentPositionsForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new RecruitmentPositions)
            ->setValidatorClass(RecruitmentPositionsRequest::class)
            ->withCustomFields()
            ->add('job', 'text', [
                'label'      => trans('job'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('job'),
                    'data-counter' => 120,
                ],
            ])
            ->add('company', 'text', [
                'label'      => 'company',
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('company'),
                    'data-counter' => 120,
                ],
            ])
            ->add('address', 'text', [
                'label'      => 'address',
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('address'),
                    'data-counter' => 120,
                ],
            ])
            ->add('expiration_date', 'text', [
                'label'      => 'expiration_date',
                'label_attr' => ['class' => 'control-label required'],
                'attr'          => [
                    'class'            => 'form-control datepicker',
                    'data-date-format' => 'yyyy/mm/dd',
                ],
                'default_value' => now(config('app.timezone'))->format('Y/m/d'),
                
            ])
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->setBreakFieldPoint('status');
    }
}
