<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\ExternalApiHelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ExternalApiHelper::class, function(){
            return new ExternalApiHelper();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
