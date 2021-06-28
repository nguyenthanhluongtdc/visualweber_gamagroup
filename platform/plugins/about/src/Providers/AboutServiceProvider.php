<?php

namespace Platform\About\Providers;

use Platform\About\Models\About;
use Illuminate\Support\ServiceProvider;
use Platform\About\Repositories\Caches\AboutCacheDecorator;
use Platform\About\Repositories\Eloquent\AboutRepository;
use Platform\About\Repositories\Interfaces\AboutInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class AboutServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(AboutInterface::class, function () {
            return new AboutCacheDecorator(new AboutRepository(new About));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
      



        $this->setNamespace('plugins/about')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([About::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-about',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/about::about.name',
                'icon'        => 'fa fa-list',
                'url'         => route('about.index'),
                'permissions' => ['about.index'],
            ]);
        });

      

        \SeoHelper::registerModule(About::class);
        \SlugHelper::registerModule(About::class, 'About');
        \SlugHelper::setPrefix(About::class, 'gioi-thieu');
        

        $this->app->booted(function () {
            
            if (defined('ABOUT_MODULE_SCREEN_NAME')) {
               
                \CustomField::registerModule(About::class)
                ->registerRule('basic', trans('plugins/about::about.name'), About::class, function () {
                        return $this->app->make(AboutInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', trans('plugins/custom-field::rules.model_name'), 'model_name', function () {
                        return [
                            About::class => trans('plugins/about::about.name'),
                        ];
                    });
             }
        });
    }
}
