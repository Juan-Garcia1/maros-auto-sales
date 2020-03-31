<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    public $timestamps = false;

    public function vehicles() {
        return $this->HasMany(Vehicle::class);
    }
}
