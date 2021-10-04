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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('webmaster', function($user) {
            return $user->role->role != 'Webmaster';
        });

        Gate::define('editeur', function($user) {
            return $user->role->role != 'Editeur';
        });

        Gate::define('fullAccess', function($user) {
            return $user->role->role == 'Admin' || $user->role->role == 'Webmaster';
        });

        Gate::define('Access', function($user) {
            return $user->role->role == 'Admin' || $user->role->role == 'Webmaster' || $user->role->role == 'Editeur' ;
        });

    }
}
