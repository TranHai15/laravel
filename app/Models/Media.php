<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_url',
        'post_id',
        'uploaded_by'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function uploader()
    {
        return $this->belongsTo(Account::class, 'uploaded_by');
    }
}
