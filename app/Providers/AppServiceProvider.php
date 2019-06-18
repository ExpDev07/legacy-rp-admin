<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;                                       // <-- add this
use kanalumaddela\LaravelSteamLogin\SteamLogin;

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
     * @param SteamLogin $steam
     * @return void
     */
    public function boot(SteamLogin $steam)
    {

    }
}
