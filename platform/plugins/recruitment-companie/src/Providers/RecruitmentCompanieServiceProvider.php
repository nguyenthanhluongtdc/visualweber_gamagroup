<?php

namespace Platform\RecruitmentCompanie\Providers;

use Platform\RecruitmentCompanie\Models\RecruitmentCompanie;
use Illuminate\Support\ServiceProvider;
use Platform\RecruitmentCompanie\Repositories\Caches\RecruitmentCompanieCacheDecorator;
use Platform\RecruitmentCompanie\Repositories\Eloquent\RecruitmentCompanieRepository;
use Platform\RecruitmentCompanie\Repositories\Interfaces\RecruitmentCompanieInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class RecruitmentCompanieServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(RecruitmentCompanieInterface::class, function () {
            return new RecruitmentCompanieCacheDecorator(new RecruitmentCompanieRepository(new RecruitmentCompanie));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/recruitment-companie')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([RecruitmentCompanie::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-recruitment-companie',
                'priority'    => 5,
                'parent_id'   => 'cms-plugins-recruitment-parent',
                'name'        => 'plugins/recruitment-companie::recruitment-companie.name',
                'url'         => route('recruitment-companie.index'),
                'permissions' => ['recruitment-companie.index'],
            ]);
        });
    }
}
