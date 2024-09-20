<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
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
    public function boot()
    {
        // $this->registerPolicies();

        // Define a Gate for admin users
        Gate::define('isAdmin', function ($user) {
            return $user->hasRole('admin');
        });

        Gate::define('isSuperAdmin', function ($user) {
            return $user->hasRole('superAdmin');
        });

        Gate::define('isOwner', function ($user) {
            return $user->hasRole('owner');
        });

        // Define a Gate for regular users
        Gate::define('isUser', function ($user) {
            return $user->hasRole('user');
        });
    }
}
