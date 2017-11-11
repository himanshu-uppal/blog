<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Post;

use App\Policies\PostPolicy;

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
    
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //$this->registerPostPolicies();

        //Gate::resource('posts', 'PostPolicy');

        //

       
    }

    public function registerPostPolicies()
    {
     Gate::define('create-post', function ($user) {
       return $user->hasAccess(['create-post']);
    });
    Gate::define('update-post', function ($user, Post $post) {
        return $user->hasAccess(['update-post']) or $user->id == $post->admin_id;
    });
    
}

   
}
