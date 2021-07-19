<?php

namespace Platform\Partner\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\Partner\Repositories\Interfaces\PartnerInterface;
use Platform\Base\Enums\BaseStatusEnum;

class PartnerRepository extends RepositoriesAbstract implements PartnerInterface
{
    
      /**
     * {@inheritDoc}
     */
    public function getPartnerFeatured(int $limit = 5, array $with = [])
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
