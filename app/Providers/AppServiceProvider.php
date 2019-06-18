<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
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
        // Macro for easier where like searches in the database.
        Builder::macro('whereLike', function($attributes, string $searchTerm) {
            foreach(array_wrap($attributes) as $attribute) {
                $this->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
            }
            return $this;
        });
    }
}
