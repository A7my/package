<?php

namespace MyVendor\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mypackage');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'mypackage');

        $this->publishes([
            __DIR__ . '/../config/mypackage.php' => config_path('mypackage.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mypackage.php', 'mypackage');
    }
}
