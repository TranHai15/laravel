<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'slug',
        'parent_id'
    ];

    // Relationship ví dụ: một category có nhiều posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
