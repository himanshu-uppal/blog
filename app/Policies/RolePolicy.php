<?php

namespace App\Policies;

use App\Admin;
use App\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the role.
     *
    * @param  \App\Admin  $admin
     * @param  \App\Role  $role
     * @return mixed
     */
    public function view(Admin $admin, Role $role)
    {
       return $admin->hasAccess(['view-role']);
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->hasAccess(['create-role']);
    }

    /**
     * Determine whether the user can update the role.
     *
    * @param  \App\Admin  $admin
     * @param  \App\Role  $role
     * @return mixed
     */
    public function update(Admin $admin, Role $role)
    {
        return $admin->hasAccess(['update-role']);
    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Role  $role
     * @return mixed
     */
    public function delete(Admin $admin, Role $role)
    {
        return $admin->hasAccess(['delete-role']);
    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Role  $role
     * @return mixed
     */
    public function approveRole(Admin $admin, Role $role)
    {
        return $admin->hasAccess(['approve-role']);
    }
}
