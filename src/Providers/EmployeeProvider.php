<?php

namespace Xpeedstudio\Employee\Providers;

use Illuminate\Support\ServiceProvider;
use Xpeedstudio\Employee\Commands\SeedDatabase;


class EmployeeProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'xpeedstudio/employee');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SeedDatabase::class,
            ]);
        }
    }

}