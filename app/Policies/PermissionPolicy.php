<?php

namespace App\Policies;

use App\Admin;
use App\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the permission.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function view(Admin $admin, Permission $permission)
    {
        return $admin->hasAccess(['view-permission']);
    }

    /**
     * Determine whether the user can create permissions.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->hasAccess(['create-permission']);
    }

    /**
     * Determine whether the user can update the permission.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function update(Admin $admin, Permission $permission)
    {
        return $admin->hasAccess(['update-permission']);
    }

    /**
     * Determine whether the user can delete the permission.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function delete(Admin $admin, Permission $permission)
    {
        return $admin->hasAccess(['delete-permission']);
    }
}
