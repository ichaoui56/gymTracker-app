<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'created_by',
        'blog_id',
    ];
    protected $table = 'comments';

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
