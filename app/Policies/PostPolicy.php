<?php

namespace App\Policies;

use App\Admin;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */

   
    public function view(Admin $admin, Post $post)
    {
        
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {

        return $admin->hasAccess(['create-post']);

    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $admin, Post $post)
    {
        return $admin->hasAccess(['update-post']) or $admin->id == $post->admin_id;
    
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $admin, Post $post)
    {
        return $admin->hasAccess(['delete-post']);   
    }
}
