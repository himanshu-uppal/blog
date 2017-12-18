<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin' ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job_title' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments(){
        return $this->morphMany('App\Comment','author');
    }
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function posts(){
        return $this->hasMany('App\Post');
    }

    

    /**
     * Checks if User has access to $permissions.
     */
    public function hasAccess(array $permissions) : bool
    {
        //dd($this->role);
        //$role = $this->role;
        $permissionIds = array();
        foreach($permissions as $permission){
            $permission_id = Permission::where('name',$permission)->select('id')->first();
            $permissionIds[]=$permission_id;

        }
        //dd($role->role);
        // check if the permission is available in any role
        
             if($this->role->hasAccess($permissionIds)) {
                 return true;
             }
        
        return false;
    }

    /**
     * Checks if the user belongs to role.
     */
    public function inRole(string $role)
    {
        return $this->role == $role;
    }

     /**
     *Returns the array of ids of all permissions that this admin is assigned 
     */
     public function permissions() 
    {
        $permissions = array();
        $role = $this->role;
        
            foreach($role->permissions as $permission){
                 if (!in_array($permission->id, $permissions))
                    {
                        $permissions[] = $permission->id; 
                    }
                }      

        
        return $permissions;        
    }

    public function isSuperAdmin(){
        return $this->role->role == "super-admin";
    }

    public function isAdmin(){
        return $this->role->role == "admin";
    }






    
}
