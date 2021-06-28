<?php

namespace Platform\About\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface AboutInterface extends RepositoryInterface
{
  
    public function getAboutFeatured(int $limit = 4);
}
