<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        Schema::defaultStringLength(191);

        date_default_timezone_set("Asia/Kolkata");

        view()->composer('*', function($view) {
            if(Auth::guard('web')->check()) {
                $loginName = ucfirst(Auth::user()->fullname);
                $view->with('loginName', $loginName);
            }
        });
    }
}
