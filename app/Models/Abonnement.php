<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'feature_id',
        'plan_id',
    ];

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
