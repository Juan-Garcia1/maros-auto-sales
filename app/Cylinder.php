<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cylinder extends Model
{
    public $timestamps = false;

    public function vehicles() {
        return $this->hadMany(Vehicle::class);
    }
}
