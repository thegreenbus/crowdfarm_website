<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {Schema::defaultStringLength(191);

        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //The code above checks whether you are in development mode or production in order to render your assets.
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
