<?php

namespace Platform\Services\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface ServicesInterface extends RepositoryInterface
{
    public function getServiceFeatured(int $limit = 5);
}
