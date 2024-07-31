<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'classe_id',
        'benefits_id',
    ];

    protected $table = 'benefits_classe';
}
