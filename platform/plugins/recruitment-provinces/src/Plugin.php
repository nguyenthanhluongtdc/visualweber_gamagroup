<?php

namespace Platform\RecruitmentProvinces;

use Illuminate\Support\Facades\Schema;
use Platform\PluginManagement\Abstracts\PluginOperationAbstract;

class Plugin extends PluginOperationAbstract
{
    public static function remove()
    {
        Schema::dropIfExists('recruitment_provinces');
    }
}
