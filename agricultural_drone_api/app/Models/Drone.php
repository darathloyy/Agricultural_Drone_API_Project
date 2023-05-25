<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Locale;

class Drone extends Model
{
    use HasFactory;
    protected $fillable=[
        'model',
        'manufacturer',
        'payload',
        'price',
        'type_drone_id',
        'location_id',
        'user_id',
    ];
    public function typeDrone():HasOne
    {
        return $this->hasOne(Type_drone::class);
    }
    public function location():HasOne
    {
        return $this->hasOne(Location::class);
    }
    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }

}
