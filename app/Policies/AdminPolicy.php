<?php

namespace App\Policies;

use App\Admin;
use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function view(Admin $admin, Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Admin  $admin
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function update(Admin $admin, Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can delete the admin.
     *
    * @param  \App\Admin  $admin
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function delete(Admin $admin, Admin $admin)
    {
        //
    }
}
