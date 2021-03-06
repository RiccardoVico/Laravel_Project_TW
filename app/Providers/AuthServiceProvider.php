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
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('isLocatore',function($user){
            return $user->hasRole('locatore');
        });
        Gate::define('isAdmin',function($user){
            return $user->hasRole('admin');
        });
        Gate::define('isLocatario',function($user){
            return $user->hasRole('locatario');
        });

        Gate::define('isuserbyid',function($user, $userid){
            return $user->id==$userid;
        });
        
        Gate::define('isUser',function($user){
            return ($user->hasRole('locatore') || $user->hasRole('locatario'));
        });
    }
}
