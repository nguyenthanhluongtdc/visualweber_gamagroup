<?php
namespace Platform\Partner\Providers;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Partner\Repositories\Interfaces\PartnerInterface;

use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
   

    /**
     * @param \stdClass $shortcode
     * @return null
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function render($shortcode)
    {
        $block = $this->app->make(PartnerInterface::class)
            ->getFirstBy([
                'alias'  => $shortcode->alias,
                'status' => BaseStatusEnum::PUBLISHED,
            ]);

        if (empty($block)) {
            return null;
        }

        return $block->content;
    }
}
