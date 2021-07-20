<?php

namespace Platform\CandidatePosition\Providers;

use Platform\CandidatePosition\Models\CandidatePosition;
use Illuminate\Support\ServiceProvider;
use Platform\CandidatePosition\Repositories\Caches\CandidatePositionCacheDecorator;
use Platform\CandidatePosition\Repositories\Eloquent\CandidatePositionRepository;
use Platform\CandidatePosition\Repositories\Interfaces\CandidatePositionInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class CandidatePositionServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(CandidatePositionInterface::class, function () {
            return new CandidatePositionCacheDecorator(new CandidatePositionRepository(new CandidatePosition));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/candidate-position')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([CandidatePosition::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-candidate-position',
                'priority'    => 5,
                'parent_id'   => 'cms-plugins-recruitment-parent',
                'name'        => 'plugins/candidate-position::candidate-position.name',
                'url'         => route('candidate-position.index'),
                'permissions' => ['candidate-position.index'],
            ]);
        });
    }
}
