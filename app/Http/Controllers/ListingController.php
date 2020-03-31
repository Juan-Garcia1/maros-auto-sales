<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Make;
use App\BodyType;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $vehicles = Vehicle::with('make', 'bodyType')->when(request()->make, function($query) {
            return $query->whereHas('make', function($query) {
                return $query->where('slug', request()->make);
            });
        })
        ->when(request()->bodyType, function($query) {
            return $query->whereHas('bodyType', function($query) {
                return $query->where('slug', request()->bodyType);
            });
        })
        ->when(request()->sort == 'low_high', function($query) {
            return $query->orderBy('price');
        })
        ->when(request()->sort == 'high_low', function($query) {
            return $query->orderBy('price', 'desc');
        })
        ->paginate(8)
        ->appends(request()->query());
        $makes = Make::all();
        $bodyTypes = BodyType::all();

        return view('listing.index', compact('vehicles', 'makes', 'bodyTypes'));
    }
    // public function index()
    // {
    //     if(request()->make) {
    //         // if there is a query string
    //         $vehicles = Vehicle::with('make')->whereHas('make', function($query) {
    //             $query->where('slug', request()->make);
    //         })->paginate(4);
    //         $makes = Make::all();
    //         $bodyTypes = BodyType::all();
    //     } else {
    //          // if no query string is available
    //          $makes = Make::all();
    //          $bodyTypes = BodyType::all();
             
    //          $vehicles = Vehicle::paginate(4);
    //     }
    //     // else if(request()->bodyType) {
    //     //     $vehicles = Vehicle::with('make','bodyType')->whereHas('bodyType', function($query) {
    //     //         $query->where('slug', request()->bodyType);
    //     //     })->paginate(4);
    //     //     $makes = Make::all();
    //     //     $bodyTypes = BodyType::all();
    //     // }
    //     if(request()->bodyType) {
    //         $vehicles = Vehicle::with('make','bodyType')->whereHas('bodyType', function($query) {
    //             $query->where('slug', request()->bodyType);
    //         })->paginate(4);
    //         $makes = Make::all();
    //         $bodyTypes = BodyType::all();
    //     }
    //      else {
    //         // if no query string is available
    //         $makes = Make::all();
    //         $bodyTypes = BodyType::all();
            
    //         $vehicles = Vehicle::paginate(4);
    //     } 
    //     return view('listing.index')->with([
    //         'vehicles' => $vehicles, 
    //         'makes' => $makes, 
    //         'bodyTypes' => $bodyTypes
    //     ]);
    // }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {   
        return view('listing.show', compact('vehicle'));
    }   
}
