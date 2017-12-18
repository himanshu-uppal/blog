<?php

namespace App\Policies;

use App\Admin;
use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /* Here c_admin means current Logged in Admin */

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Admin  $c_admin
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function view(Admin $c_admin, Admin $admin)
    {
       if($c_admin->isSuperAdmin()){
            return $c_admin->hasAccess(['view-admin']);             
        }
        else{
            return $c_admin->hasAccess(['view-admin']) and $c_admin->id == $admin->id;
            
        }
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\Admin  $c_admin
     * @return mixed
     */
    public function create(Admin $c_admin)
    {
        return $c_admin->hasAccess(['create-admin']);   
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Admin  $c_admin
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function update(Admin $c_admin, Admin $admin)
    {
        if($c_admin->isSuperAdmin()){
            return $c_admin->hasAccess(['update-admin']);             
        }
        else{
            return $c_admin->hasAccess(['update-admin']) and $c_admin->id == $admin->id;
            
        }
    }

    /**
     * Determine whether the user can delete the admin.
     *
    * @param  \App\Admin  $c_admin
     * @param  \App\Admin  $admin
     * @return mixed
     */
    public function delete(Admin $c_admin, Admin $admin)
    {
       return $c_admin->hasAccess(['delete-admin']);   
    }
}
