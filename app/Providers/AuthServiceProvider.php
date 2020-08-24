<?php

namespace App\Providers;

use App\Policies\SyllabusPolicy;
use App\Syllabus;
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
        Syllabus::class => SyllabusPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
         
        Gate::define('user-management', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('destribute-courses', function ($user) {
            return $user->hasRole('supervisor');
        });
        Gate::define('build-syllabus', function ($user) {
            return $user->hasOperationByRole('build-syllabus');
        });
        Gate::define('validate-syllabus', function ($user) {
            return $user->hasOperationByRole('validate-syllabus');
        });
        Gate::define('confirm-syllabus', function ($user) {
            return $user->hasOperationByRole('confirm-syllabus');
        });
        // Gate::define('view-syllabus', 'App\Policies\SyllabusPolicy@view');
        // Gate::define('create-syllabus', 'App\Policies\SyllabusPolicy@view');
        // Gate::define('edit-syllabus', 'App\Policies\SyllabusPolicy@view');
        // Gate::define('validate-syllabus', 'App\Policies\SyllabusPolicy@view');
        // Gate::define('confirm-syllabus', 'App\Policies\SyllabusPolicy@view');
        // Gate::define('shareOnline-syllabus', 'App\Policies\SyllabusPolicy@view');



      
       
    }
}
