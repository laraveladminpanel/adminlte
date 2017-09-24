<?php

namespace LaravelAdminPanel\Admin;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use LaravelAdminPanel\Admin\Facades\Admin as AdminFacade;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Admin', AdminFacade::class);

        app()->singleton('admin', function() {
            return new Admin;
        });
    }
}
