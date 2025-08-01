<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    //
    // A role can belong to many users
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}
