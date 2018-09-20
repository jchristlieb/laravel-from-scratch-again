<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // a category has many posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
