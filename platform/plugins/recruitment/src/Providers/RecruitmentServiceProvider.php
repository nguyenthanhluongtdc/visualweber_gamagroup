<?php

namespace Platform\Recruitment\Providers;

use Platform\Recruitment\Models\Recruitment;
use Illuminate\Support\ServiceProvider;
use Platform\Recruitment\Repositories\Caches\RecruitmentCacheDecorator;
use Platform\Recruitment\Repositories\Eloquent\RecruitmentRepository;
use Platform\Recruitment\Repositories\Interfaces\RecruitmentInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class RecruitmentServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(RecruitmentInterface::class, function () {
            return new RecruitmentCacheDecorator(new RecruitmentRepository(new Recruitment));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/recruitment')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            // if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
            //     \Language::registerModule([Recruitment::class]);
            // }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-recruitment-parent',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/recruitment::recruitment.name',
                'icon'        => 'fas fa-users',
            ])
                ->registerItem([
                    'id'          => 'cms-plugins-recruitment',
                    'priority'    => 1,
                    'parent_id'   => 'cms-plugins-recruitment-parent',
                    'name'        => 'plugins/recruitment::recruitment.name',
                    'url'         => route('recruitment.index'),
                    'permissions' => ['recruitment.index'],
                ]);
            \EmailHandler::addTemplateSettings(CONTACT_MODULE_SCREEN_NAME, config('plugins.recruitment-contact.email', []));
        });
        add_shortcode('recruitment-form', 'Recruitment form', 'Custom form', function ($shortCode) {
            return view('plugins/recruitment::form', [
                'company'    => $shortCode->company,
                'post'       => $shortCode->post,
                'company_email'       => $shortCode->company_email,
            ])->render();
        });
    }
}
