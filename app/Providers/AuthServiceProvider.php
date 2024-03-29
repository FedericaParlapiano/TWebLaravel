<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot() {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->hasRole('admin');
        });

        Gate::define('isLocatario', function ($user) {
            return $user->hasRole('locatario');
        });
        
        Gate::define('isLocatore', function ($user) {
            return $user->hasRole('locatore');
        });
        
        Gate::define('isUser', function ($user) {
            return $user->hasRole(['locatore', 'locatario']);
        });

        Gate::define('show-disponibilita', function ($user) {
            return $user->hasRole(['locatore', 'locatario', 'admin']);
        });
    }
}
