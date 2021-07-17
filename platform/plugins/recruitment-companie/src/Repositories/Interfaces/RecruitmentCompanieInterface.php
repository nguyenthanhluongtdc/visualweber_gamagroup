<?php

namespace Platform\RecruitmentCompanie\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface RecruitmentCompanieInterface extends RepositoryInterface
{
     /**
     * @param boolean $active
     */
    public function getAllForForm($active = true);
}
