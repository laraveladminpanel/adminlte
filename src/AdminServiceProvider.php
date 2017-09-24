<?php

namespace LaravelAdminPanel\Admin;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use LaravelAdminPanel\Admin\Http\Middleware\AdminMiddleware;
use LaravelAdminPanel\Admin\Facades\Admin as AdminFacade;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');

        $router->aliasMiddleware('admin', AdminMiddleware::class);
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

        $this->loadHelpers();
    }

    /**
     * Load helpers.
     */
    protected function loadHelpers()
    {
        foreach (glob(__DIR__.'/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }
}
