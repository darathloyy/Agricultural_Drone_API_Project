<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Instruction extends Model
{
    use HasFactory;

    protected $fillable=[
        'time_start',
        'time_end',
        'status',
        'feedback',
        'drone_id',
        'plan_id',
    ];

    public function dron(): HasOne
    {
        return $this->hasOne(Drone::class);
    }
    
    public function plan(): HasOne
    {
        return $this->hasOne(Plan::class);
    }
}
