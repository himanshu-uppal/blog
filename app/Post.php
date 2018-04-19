<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
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

    public function font(){
        return $this->belongsTo('App\Font');
    }
   
}
