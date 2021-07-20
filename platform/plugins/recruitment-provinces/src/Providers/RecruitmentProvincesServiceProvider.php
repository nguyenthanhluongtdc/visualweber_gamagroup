<?php

namespace Platform\RecruitmentProvinces\Providers;

use Platform\RecruitmentProvinces\Models\RecruitmentProvinces;
use Illuminate\Support\ServiceProvider;
use Platform\RecruitmentProvinces\Repositories\Caches\RecruitmentProvincesCacheDecorator;
use Platform\RecruitmentProvinces\Repositories\Eloquent\RecruitmentProvincesRepository;
use Platform\RecruitmentProvinces\Repositories\Interfaces\RecruitmentProvincesInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class RecruitmentProvincesServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(RecruitmentProvincesInterface::class, function () {
            return new RecruitmentProvincesCacheDecorator(new RecruitmentProvincesRepository(new RecruitmentProvinces));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/recruitment-provinces')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([RecruitmentProvinces::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-recruitment-provinces',
                'priority'    => 5,
                'parent_id'   => 'cms-plugins-recruitment-parent',
                'name'        => 'Provinces',
                'url'         => route('recruitment-provinces.index'),
                'permissions' => ['recruitment-provinces.index'],
            ]);
        });
    }
}
