<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriveTrain extends Model
{
    public $timestamps = false;

    public function vehicels() {
        return $this->hasMany(Vehicle::class);
    }
}
