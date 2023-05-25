<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type_drone extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];
    public function dones(): HasMany
    {
        return $this->hasMany(Drone::class);
    }
}
