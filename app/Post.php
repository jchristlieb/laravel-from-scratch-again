<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];


    // a post belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // any post may have many categories
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}




