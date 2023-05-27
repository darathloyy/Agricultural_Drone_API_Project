<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Farm extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'user_id',
        'province_id'
    ];
    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }
    public function province():BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function maps(): HasMany
    {
        return $this->hasMany(Map::class);
    }
}
