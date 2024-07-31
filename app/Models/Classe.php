<?php

namespace App\Models;

use App\Models\Benefits;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'picture',
        'coach_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefits::class);
    }

    public function coach()
    {
        return $this->belongsTo(User::class);
    }
    
}
