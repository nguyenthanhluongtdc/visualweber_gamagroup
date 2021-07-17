<?php

namespace Platform\RecruitmentPost\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\RecruitmentPost\Http\Requests\RecruitmentPostRequest;
use Platform\RecruitmentPost\Models\RecruitmentPost;

class RecruitmentPostForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $listCompanies = get_companies_for_form();
        $companies = [];
        if(!empty($listCompanies)){
            foreach ($listCompanies as $row) {
                $companies[$row->id] = $row->name;
            }
        }
        $companies = [0 => trans('plugins/blog::categories.none')] + $companies;


        $this
            ->setupModel(new RecruitmentPost)
            ->setValidatorClass(RecruitmentPostRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('experience', 'editor', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('describe', 'editor', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('Responsibility', 'editor', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('expire', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'          => [
                    'class'            => 'form-control datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ],
                'wrapper'    => [
                    'class' => 'form-group col-md-6',
                ],
                'default_value' => now(config('app.timezone'))->format('d/m/Y'),
            ])


        
            ->add('company', 'customSelect', [
                'label'      => __('Công ty'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'select-search-full',
                ],
                'choices'    => $companies,
            ])
            ->add('department', 'text', [
                'label'      => __('Phòng ban'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ])
            ->add('location', 'text', [
                'label'      => __('Địa điểm làm việc'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ])
            ->add('type', 'customRadio', [
                'label' => __('Loại hợp đồng'),
                'label_attr' => ['class' => 'control-label'],
                'choices' => [
                    [1, __('Chính thức')],
                    [2, __('Nhân viên thời vụ')],
                    [3, __('Bán thời gian')],
                    [4, __('Thực tập')],
                    [5, __('Khác')],
                ],
            ])
            ->add('timework', 'text', [
                'label'      => __('Thiết bị, công cụ'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ])
            ;


            $this
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
