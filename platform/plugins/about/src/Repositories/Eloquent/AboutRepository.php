<?php

namespace Platform\About\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\About\Repositories\Interfaces\AboutInterface;
use Platform\Base\Enums\BaseStatusEnum;

class AboutRepository extends RepositoriesAbstract implements AboutInterface
{
    

    public function getAboutFeatured(int $limit = 4){
        
        $data = $this->model
        ->where([
            'app_abouts.status'      => BaseStatusEnum::PUBLISHED,
            'app_abouts.is_featured' => 1,
        ])
        ->limit($limit)
        ->orderBy('app_abouts.created_at', 'desc')->get();
            return $data;
    return $this->applyBeforeExecuteQuery($data)->get();
    }
}
