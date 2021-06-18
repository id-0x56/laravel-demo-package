<?php

namespace id_0x56\LaravelDemoPackage\Providers;

use id_0x56\LaravelDemoPackage\Classes\LaravelDemoPackage;
use Illuminate\Support\ServiceProvider;

class LaravelDemoPackageServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/demo-package.php', 'demo-package'
        );

        $this->app->bind(LaravelDemoPackage::class);
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../config/demo-package.php' => config_path('demo-package.php'),
        ]);
    }
}
