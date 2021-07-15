<?php

namespace Platform\Partner\Providers;

use Platform\Partner\Models\Partner;
use Illuminate\Support\ServiceProvider;
use Platform\Partner\Repositories\Caches\PartnerCacheDecorator;
use Platform\Partner\Repositories\Eloquent\PartnerRepository;
use Platform\Partner\Repositories\Interfaces\PartnerInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class PartnerServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(PartnerInterface::class, function () {
            return new PartnerCacheDecorator(new PartnerRepository(new Partner));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/partner')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Partner::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-partner',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/partner::partner.name',
                'icon'        => 'fa fa-handshake',
                'url'         => route('partner.index'),
                'permissions' => ['partner.index'],
            ]);
        });
        \SeoHelper::registerModule(Partner::class);
    \SlugHelper::registerModule(Partner::class, 'Partners');
    \SlugHelper::setPrefix(Partner::class, 'doi-tac');
    

    $this->app->booted(function () {
        
        if (defined('ABOUT_MODULE_SCREEN_NAME')) {
           
            \CustomField::registerModule(Partner::class)
            ->registerRule('basic', trans('plugins/partner::partner.name'), Partner::class, function () {
                    return $this->app->make(PartnerInterface::class)->pluck('name', 'id');
                })
                ->expandRule('other', trans('plugins/custom-field::rules.model_name'), 'model_name', function () {
                    return [
                        Partner::class => trans('plugins/partner::partner.name'),
                    ];
                });
         }
    });
    }

    
}
