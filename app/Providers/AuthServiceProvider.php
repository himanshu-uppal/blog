<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Post;
use App\Category;
use App\Permission;
use App\Admin;
use App\Role;

use App\Policies\PostPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\RolePolicy;
use App\Policies\PermissionPolicy;
use App\Policies\AdminPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */

     
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class,
        Role::class => RolePolicy::class,
        Category::class => CategoryPolicy::class,
        Admin::class => AdminPolicy::class,
        Permission::class => PermissionPolicy::class,
    
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
       
    }

    
   
}
