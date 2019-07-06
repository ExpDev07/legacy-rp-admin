<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            // Grant all abilities to users who are marked as a super-admin and also do a
            // permission-check to allow for permissions to be provided as abilities.
            if ($user->is_super_admin() || $user->has_permission($ability)) {
                return true;
            }
        });

    }
}
