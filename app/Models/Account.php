<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role'
    ];

    // Relationship ví dụ: một account có nhiều posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
