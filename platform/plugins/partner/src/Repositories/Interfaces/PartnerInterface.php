<?php

namespace Platform\Partner\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface PartnerInterface extends RepositoryInterface
{
    public function getPartnerFeatured(int $limit = 5);
}
