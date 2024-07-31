<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'picture',
        'coach_id',
        'category_id',
        'quote_id',
    ];

    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}
