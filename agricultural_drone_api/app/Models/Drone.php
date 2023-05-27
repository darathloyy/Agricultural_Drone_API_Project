<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Locale;

class Drone extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'battery',
        'manufacturer',
        'payload',
        'price',
        'type_drone_id',
        'location_id',
        'user_id',
    ];

    public function typeDrone(): BelongsTo
    {
        return $this->belongsTo(Type_drone::class);
    }
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function instructions(): HasMany
    {
        return $this->hasMany(Instruction::class);
    }
    public function maps(): HasMany
    {
        return $this->hasMany(Map::class);
    }
}
