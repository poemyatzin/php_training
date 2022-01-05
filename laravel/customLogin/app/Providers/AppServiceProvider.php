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
        // Dao Registration
        $this->app->bind('App\Contracts\Dao\TaskDaoInterface', 'App\Dao\TaskDao');
        $this->app->bind('App\Contracts\Dao\UserDaoInterface', 'App\Dao\UserDao');

        // Business logic registration
        $this->app->bind('App\Contracts\Services\TaskServiceInterface', 'App\Services\TaskService');
        $this->app->bind('App\Contracts\Services\UserServiceInterface', 'App\Services\UserService');
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
