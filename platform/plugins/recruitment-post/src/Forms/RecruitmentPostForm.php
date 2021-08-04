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
        if (!empty($listCompanies)) {
            foreach ($listCompanies as $row) {
                $companies[$row->id] = $row->name;
            }
        }
        $companies = [0 => trans('plugins/blog::categories.none')] + $companies;

        $listCity = get_address_for_form();
        $city = [];
        if (!empty($listCity)) {
            foreach ($listCity as $row) {
                $city[$row->id] = $row->name;
            }
        }
        $city = [0 => trans('plugins/blog::categories.none')] + $city;
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
                'label'      => trans('Tổng quan công việc'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('describe', 'editor', [
                'label'      => trans('Mô tả'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('Responsibility', 'editor', [
                'label'      => trans('Trách nhiệm'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('expire', 'text', [
                'label'      => trans('Hạn nộp hồ sơ'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'          => [
                    'class'            => 'form-control datepicker',
                    'data-date-format' => 'dd/mm/yyyy',
                ],
                // 'wrapper'    => [
                //     'class' => 'form-group col-md-6',
                // ],
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
            ->add('location', 'customSelect', [
                'label'      => __('Địa điểm làm việc'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'select-search-full',
                ],
                'choices'    => $city,
            ])
            ->add('candidate_position_id', 'customSelect', [
                'label' => __('plugins/candidate-position::candidate-position.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices' => array_merge([
                    "" => "Choose",
                ], get_candidate_position()->pluck('name', 'id')->toArray() ?? []),
            ])
            ->add('timework', 'text', [
                'label'      => __('Thiết bị, công cụ'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ]);
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
