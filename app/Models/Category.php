<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // A category can belong to many posts
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_category');
    }
}
