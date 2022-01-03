<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Dao\StudentDaoInterface', 'App\Dao\StudentDao');

        // Business logic registration
        $this->app->bind('App\Contracts\Service\StudentServiceInterface', 'App\Service\StudentService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
