<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public $timestamps = false;

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
}
