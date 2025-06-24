<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    // A media file belongs to a post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
