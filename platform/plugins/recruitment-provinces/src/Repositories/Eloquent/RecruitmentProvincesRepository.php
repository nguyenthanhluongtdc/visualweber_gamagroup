<?php

namespace Platform\RecruitmentProvinces\Repositories\Eloquent;
use Platform\Base\Enums\BaseStatusEnum;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\RecruitmentProvinces\Repositories\Interfaces\RecruitmentProvincesInterface;

class RecruitmentProvincesRepository extends RepositoriesAbstract implements RecruitmentProvincesInterface
{

    public function getAddForForm($active = true)
    {
        $data = $this->model->select('recruitment_provinces.*')
        ->orderBy('recruitment_provinces.created_at', 'DESC');
        
        if ($active) {
            $data = $data->where('recruitment_provinces.status', BaseStatusEnum::PUBLISHED);
        }

        return $this->applyBeforeExecuteQuery($data)->get();
    }
}
