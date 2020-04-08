<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
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

    protected $fillable = ['vin', 'make_id', 'model', 'year', 'type_id', 'location_id', 'color_id', 'owners', 'seats', 'price', 'mileage', 'transmission_id', 'cylinder_id', 'drivetrain_id', 'features', 'image'];

    protected $casts = [
        'features' => 'array'
    ];

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function make()
    {
        return $this->belongsTo(Make::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function bodyType()
    {
        return $this->belongsTo(BodyType::class, 'type_id');
    }

    public function cylinder()
    {
        return $this->belongsTo(Cylinder::class);
    }

    public function drivetrain()
    {
        return $this->belongsTo(DriveTrain::class);
    }
}
