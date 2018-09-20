<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // any category has many posts
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
