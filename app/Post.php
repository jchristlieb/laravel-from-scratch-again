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

    // a post belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}




