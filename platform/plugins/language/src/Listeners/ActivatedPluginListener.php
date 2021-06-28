<?php

namespace Platform\Language\Listeners;

use Platform\PluginManagement\Events\ActivatedPluginEvent;
use Exception;
use Setting;

class ActivatedPluginListener
{

    /**
     * Handle the event.
     *
     * @param ActivatedPluginEvent $event
     * @return void
     */
    public function handle()
    {
        try {
            $plugins = get_active_plugins();

            if (($key = array_search('language', $plugins)) !== false) {
                unset($plugins[$key]);
            }

            $plugins = ['language'] + $plugins;

            Setting::set('activated_plugins', json_encode($plugins))->save();
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}