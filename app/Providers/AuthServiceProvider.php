<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Permission;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use \Illuminate\Support\Facades;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Facades\Gate::before(function($user) {
            if($user->isSuperUser()) return true;
        });

        foreach (Permission::all() as $permission) {
            \Illuminate\Support\Facades\Gate::define($permission->name, function ($user) use ($permission) {
                return $user->hasPermission($permission);
            });
        }
    }
}
