<?php

namespace Platform\Services\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Services\Repositories\Interfaces\ServicesInterface;
use Platform\Base\Enums\BaseStatusEnum;

class ServicesRepository extends RepositoriesAbstract implements ServicesInterface
{
    

     /**
     * {@inheritDoc}
     */
    public function getServiceFeatured(int $limit = 5, array $with = [])
    {
        $data = $this->model
            ->where([
                'status'      => BaseStatusEnum::PUBLISHED,
                'is_featured' => 1,
            ])
            ->limit($limit)
            ->with(array_merge(['slugable'], $with))
            ->orderBy('created_at', 'desc');

        return $this->applyBeforeExecuteQuery($data)->get();
    }


}
