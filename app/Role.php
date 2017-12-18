<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   public function permissions(){
   	return $this->belongsToMany('App\Permission');
   }

   public function admin()
    {
        return $this->hasOne('App\Admin');
    }

    public function hasAccess(array $permissions) : bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission))
                return true;
        }
        return false;
    }

    private function hasPermission($permission) : bool
    {
      
      return $this->permissions->where('id',$permission->id)->count() == 1 ;    
       
    }
}
