<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['image'];

    protected $casts = [
        'image' => 'array'
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
