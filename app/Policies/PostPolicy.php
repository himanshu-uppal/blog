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
        return $admin->hasAccess(['view-post']);
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

        if($admin->roles->first()->role == 'editor'){
             return $admin->hasAccess(['update-post']) and $admin->id == $post->admin_id;
        }
        else{
            return $admin->hasAccess(['update-post']);
        }
       
    
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

     /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */

    public function permanentDelete(Admin $admin, Post $post)
    {
        return $admin->hasAccess(['perm-delete-post']);   
    }

     /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Post  $post
     * @return mixed
     */

     public function restore(Admin $admin, Post $post)
    {
        return $admin->hasAccess(['restore-post']);   
    }
}
