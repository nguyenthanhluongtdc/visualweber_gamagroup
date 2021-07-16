<?php

namespace Platform\RecruitmentPositions\Providers;

use Platform\RecruitmentPositions\Models\RecruitmentPositions;
use Illuminate\Support\ServiceProvider;
use Platform\RecruitmentPositions\Repositories\Caches\RecruitmentPositionsCacheDecorator;
use Platform\RecruitmentPositions\Repositories\Eloquent\RecruitmentPositionsRepository;
use Platform\RecruitmentPositions\Repositories\Interfaces\RecruitmentPositionsInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class RecruitmentPositionsServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(RecruitmentPositionsInterface::class, function () {
            return new RecruitmentPositionsCacheDecorator(new RecruitmentPositionsRepository(new RecruitmentPositions));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/recruitment-positions')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([RecruitmentPositions::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-recruitment-positions',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/recruitment-positions::recruitment-positions.name',
                'icon'        => 'fa fa-list',
                'url'         => route('recruitment-positions.index'),
                'permissions' => ['recruitment-positions.index'],
            ]);
        });
    }
}
