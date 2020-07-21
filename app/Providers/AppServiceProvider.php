<?php

namespace App\Providers;

use App\Themeblock;
use App\Themeinclude;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $THEMEBLOCK = new Themeblock;
        $THEMEINC = new Themeinclude;
        View::share('THEMEBLOCK', $THEMEBLOCK);
        View::share('THEMEINC', $THEMEINC);
    }
}
