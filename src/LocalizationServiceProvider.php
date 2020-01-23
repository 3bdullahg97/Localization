<?php

namespace Luqta\Localization;

use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function boot()
    {
         $this->loadTranslationsFrom(__DIR__.'/Resources/lang', 'luqta');

        $this->publishes([
            __DIR__.'/Resources/lang' => resource_path('lang/vendor/luqta'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/localization.php', 'localization');

        $this->app->singleton('localization', function ($app) {
            return new Localization;
        });
    }

    public function provides()
    {
        return ['localization'];
    }
}
