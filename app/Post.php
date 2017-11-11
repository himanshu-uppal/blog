<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
     public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function admin(){
    	return $this->belongsTo('App\Admin');
    }
   
}
