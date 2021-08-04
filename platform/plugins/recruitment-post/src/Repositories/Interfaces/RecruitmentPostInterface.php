<?php

namespace Platform\RecruitmentPost\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface RecruitmentPostInterface extends RepositoryInterface
{
     /**
     * @param integer $paginate
     * @param boolean $active
     */
    public function getAll($paginate = 10, $active = true);

    /**
     * 
     */
    public function getAllForFilter();
}
