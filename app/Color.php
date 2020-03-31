<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public $timestamps = false;

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
}
