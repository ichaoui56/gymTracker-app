<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbonnementFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'abonnement_id',
        'feature_id',
    ];

    protected $table = 'abonnement_feature';
}
