<?php

namespace Platform\Services\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Services\Repositories\Interfaces\ServicesInterface;
use Platform\Base\Enums\BaseStatusEnum;

class ServicesRepository extends RepositoriesAbstract implements ServicesInterface
{
    public function getServiceFeatured(int $limit = 5){
        
        $data = $this->model
        ->where([
            'app_services.status'      => BaseStatusEnum::PUBLISHED,
            'app_services.is_featured' => 1,
        ])
        ->limit($limit)
        ->orderBy('app_services.created_at', 'desc')->get();
            return $data;
    return $this->applyBeforeExecuteQuery($data)->get();
    }
}
