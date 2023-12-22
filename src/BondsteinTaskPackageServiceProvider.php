<?php

namespace Muquarrabin\BondsteinTaskPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BondsteinTaskPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'bondsteintaskpackage');
        $this->registerRoutes();
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bondsteintaskpackage');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Muquarrabin\BondsteinTaskPackage\Http\Controllers\EmployeeController');
    }
    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('bondsteintaskpackage.prefix'),
            'middleware' => config('bondsteintaskpackage.middleware'),
        ];
    }
}
