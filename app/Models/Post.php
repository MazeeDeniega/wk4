<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A post can belong to many categories (Many-to-Many)
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    // A post can have many tags (Many-to-Many)
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    // A post can have many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // A post can have many media
    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
