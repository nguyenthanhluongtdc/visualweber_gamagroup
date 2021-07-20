<?php

namespace Platform\RecruitmentPost\Providers;

use Platform\RecruitmentPost\Models\RecruitmentPost;
use Illuminate\Support\ServiceProvider;
use Platform\RecruitmentPost\Repositories\Caches\RecruitmentPostCacheDecorator;
use Platform\RecruitmentPost\Repositories\Eloquent\RecruitmentPostRepository;
use Platform\RecruitmentPost\Repositories\Interfaces\RecruitmentPostInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class RecruitmentPostServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(RecruitmentPostInterface::class, function () {
            return new RecruitmentPostCacheDecorator(new RecruitmentPostRepository(new RecruitmentPost));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/recruitment-post')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([RecruitmentPost::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-recruitment-post',
                'priority'    => 5,
                'parent_id'   => 'cms-plugins-recruitment-parent',
                'name'        => 'Post',
                'url'         => route('recruitment-post.index'),
                'permissions' => ['recruitment-post.index'],
            ]);
        });


        \SeoHelper::registerModule(RecruitmentPost::class);
        \SlugHelper::registerModule(RecruitmentPost::class, 'RecruitmentPost');
        \SlugHelper::setPrefix(RecruitmentPost::class, 'nhan-tai');
        $this->app->booted(function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([RecruitmentPost::class]);
            }

            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(RecruitmentPost::class)
                    ->registerRule('basic', trans('plugins/recruitment-post::recruitment-post.name'), RecruitmentPost::class, function () {
                        return $this->app->make(RecruitmentPost::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', trans('plugins/custom-field::rules.model_name'), 'model_name', function () {
                        return [
                            Block::class => trans('plugins/recruitment-post::recruitment-post.name'),
                        ];
                    });
            }
        });
    }
}
