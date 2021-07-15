<?php

namespace Platform\Partner\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Partner\Repositories\Interfaces\PartnerInterface;
use Platform\Base\Enums\BaseStatusEnum;

class PartnerRepository extends RepositoriesAbstract implements PartnerInterface
{
    public function getPartnerFeatured(int $limit = 5){
        
        $data = $this->model
        ->where([
            'app_partners.status'      => BaseStatusEnum::PUBLISHED,
            'app_partners.is_featured' => 1,
        ])
        ->limit($limit)
        ->orderBy('app_partners.created_at', 'desc')->get();
            return $data;
    return $this->applyBeforeExecuteQuery($data)->get();
    }
}
