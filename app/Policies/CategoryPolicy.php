<?php

namespace App\Policies;

use App\Admin;
use App\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the category.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Category  $category
     * @return mixed
     */
    public function view(Admin $admin, Category $category)
    {
       return $admin->hasAccess(['view-category']);
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->hasAccess(['create-category']);
    }

    /**
     * Determine whether the user can update the category.
     *
    * @param  \App\Admin  $admin
     * @param  \App\Category  $category
     * @return mixed
     */
    public function update(Admin $admin, Category $category)
    {
        return $admin->hasAccess(['update-category']);
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Category  $category
     * @return mixed
     */
    public function delete(Admin $admin, Category $category)
    {
        return $admin->hasAccess(['delete-category']);
    }
}
