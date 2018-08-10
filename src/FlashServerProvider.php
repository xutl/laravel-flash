<?php

namespace XuTL\Flash;

use Illuminate\Support\ServiceProvider;

/**
 * Class FlashServerProvider
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class FlashServerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'flash');
        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/flash'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flash', function () {
            return $this->app->make(FlashNotifiy::class);
        });
    }
}