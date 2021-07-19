<?php

namespace Platform\RecruitmentCompanie\Repositories\Eloquent;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\RecruitmentCompanie\Repositories\Interfaces\RecruitmentCompanieInterface;

class RecruitmentCompanieRepository extends RepositoriesAbstract implements RecruitmentCompanieInterface
{
    public function getAllForForm($active = true)
    {
        $data = $this->model->select('app_recruitment_companies.*')
        ->orderBy('app_recruitment_companies.created_at', 'DESC');
        
        if ($active) {
            $data = $data->where('app_recruitment_companies.status', BaseStatusEnum::PUBLISHED);
        }

        return $this->applyBeforeExecuteQuery($data)->get();
    }

     /**
     * {@inheritDoc}
     */
    public function getByProvince($provinceId, $active = true)
    {
        $data = $this->model->select('app_recruitment_companies.*')
        ->where('province_id', $provinceId)
        ->orderBy('app_recruitment_companies.created_at', 'DESC');
        
        if ($active) {
            $data = $data->where('app_recruitment_companies.status', BaseStatusEnum::PUBLISHED);
        }

        return $this->applyBeforeExecuteQuery($data)->get();
    }
}
