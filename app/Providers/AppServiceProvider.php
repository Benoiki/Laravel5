<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Management\PhotoManagement',
            'App\Management\PhotoManagementImpl'
        );

        $this->app->bind(
            'App\Repository\EmailRepository',
            'App\Repository\EmailRepositoryImpl');
    }
}
