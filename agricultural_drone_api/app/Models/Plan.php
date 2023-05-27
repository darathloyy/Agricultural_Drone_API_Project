<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'type',
        'date',
        'time',
        'area',
        'density',
    ];

    public function instructions():HasMany
    {
        return $this->hasMany(Instruction::class);
    }
}
