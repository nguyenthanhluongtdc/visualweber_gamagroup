<?php

namespace Platform\Services\Providers;

use Platform\Services\Models\Services;
use Illuminate\Support\ServiceProvider;
use Platform\Services\Repositories\Caches\ServicesCacheDecorator;
use Platform\Services\Repositories\Eloquent\ServicesRepository;
use Platform\Services\Repositories\Interfaces\ServicesInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ServicesServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ServicesInterface::class, function () {
            return new ServicesCacheDecorator(new ServicesRepository(new Services));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/services')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Services::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-services',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/services::services.name',
                'icon'        => 'fa fa-list',
                'url'         => route('services.index'),
                'permissions' => ['services.index'],
            ]);
        });


        \SeoHelper::registerModule(Services::class);
        \SlugHelper::registerModule(Services::class, 'Services');
        \SlugHelper::setPrefix(Services::class, 'linh-vuc-kinh-doanh');
        

       


        $this->app->booted(function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Services::class]);
            }

            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(Services::class)
                    ->registerRule('basic', trans('plugins/services::services.name'), Services::class, function () {
                        return $this->app->make(ServicesInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', trans('plugins/custom-field::rules.model_name'), 'model_name', function () {
                        return [
                            Block::class => trans('plugins/services::services.name'),
                        ];
                    });
            }

        });
    }
}
