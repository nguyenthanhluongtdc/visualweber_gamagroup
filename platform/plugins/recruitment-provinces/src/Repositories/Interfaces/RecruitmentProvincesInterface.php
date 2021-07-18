<?php

namespace Platform\RecruitmentProvinces\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface RecruitmentProvincesInterface extends RepositoryInterface
{ 
      /**
     * @param boolean $active
     */
    public function getAddForForm($active = true);
}
