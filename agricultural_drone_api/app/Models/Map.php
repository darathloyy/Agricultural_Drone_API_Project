<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Map extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image',
        'farm_id',
        'drone_id',
    ];

    public function farm(): BelongsTo
    {
        return $this->belongsTo(Farm::class);
    }
    public function drone(): HasOne
    {
        return $this->hasOne(Drone::class);
    }
}
