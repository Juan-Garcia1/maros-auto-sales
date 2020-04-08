<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Vehicle;
use App\Make;
use App\Color;
use App\Location;
use App\BodyType;
use App\Cylinder;
use App\Transmission;
use App\DriveTrain;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(10);
        return view('admin/vehicles/index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bodytypes = BodyType::all();
        $colors = Color::all();
        $cylinders = Cylinder::all();
        $drivetrains = DriveTrain::all();
        $locations = Location::all();
        $makes = Make::all();
        $transmissions = Transmission::all();
        return view('admin/vehicles/create', compact('bodytypes', 'colors', 'cylinders', 'drivetrains', 'locations', 'makes', 'transmissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vin' => 'required|size:17',
            'model' => 'required',
            'make_id' => 'required|notIn:0',
            'year' => 'required|integer',
            'price' => 'required|integer',
            'location_id' => 'required|notIn:0',
            'mileage' => 'required|integer',
            'owners' => 'required|integer',
            'seats' => 'required|integer',
            'type_id' => 'required',
            'color_id' => 'required',
            'cylinder_id' => 'required',
            'transmission_id' => 'required',
            'drivetrain_id' => 'required',
            'features' => 'sometimes|array',
            'image' => 'required|image|mimes:jpeg|max:5000'
        ], [
            'vin.required' => 'VIN is required',
            'model.required' => 'Model is required',
            'year.required' => 'Year is required',
            'make_id.required' => 'Make is required',
            'price.required' => 'Price is required',
            'location_id.required' => 'Location is required',
            'mileage.required' => 'Mileage is required',
            'owners.required' => 'Owners is required',
            'seats.required' => 'Seats is required',
            'type_id.required' => 'Body type is required',
            'color_id.required' => 'Color is required',
            'cylinder_id.required' => "Cylinder is required",
            'transmission_id.required' => 'Transmission is required',
            'drivetrain_id.required' => 'Drivetrain is required',
            'image.required' => 'Image is required'
        ]);

        $vehicle = new Vehicle;
        $vehicle->vin = $request->input('vin');
        $vehicle->model = $request->input('model');
        $vehicle->make_id = $request->input('make_id');
        $vehicle->year = $request->input('year');
        $vehicle->price = $request->input('price');
        $vehicle->location_id = $request->input('location_id');
        $vehicle->mileage = $request->input('mileage');
        $vehicle->owners = $request->input('owners');
        $vehicle->seats = $request->input('seats');
        $vehicle->type_id = $request->input('type_id');
        $vehicle->color_id = $request->input('color_id');
        $vehicle->cylinder_id = $request->input('cylinder_id');
        $vehicle->transmission_id = $request->input('transmission_id');
        $vehicle->drivetrain_id = $request->input('drivetrain_id');
        $vehicle->features = $request->input('features');
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('uploads', $fileNameToStore, 'public');
        }
        $vehicle->image = $fileNameToStore;
        $vehicle->save();
        return redirect('/admin/vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $bodytypes = BodyType::all();
        $colors = Color::all();
        $cylinders = Cylinder::all();
        $drivetrains = DriveTrain::all();
        $locations = Location::all();
        $makes = Make::all();
        $transmissions = Transmission::all();
        return view('admin/vehicles/edit', compact('vehicle', 'bodytypes', 'colors', 'cylinders', 'drivetrains', 'locations', 'makes', 'transmissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehicle)
    {
        $vehicle = Vehicle::find($vehicle);

        $request->validate([
            'vin' => 'required|size:17',
            'model' => 'required',
            'make_id' => 'required|notIn:0',
            'year' => 'required|integer',
            'price' => 'required|integer',
            'location_id' => 'required|notIn:0',
            'mileage' => 'required|integer',
            'owners' => 'required|integer',
            'seats' => 'required|integer',
            'type_id' => 'required',
            'color_id' => 'required',
            'cylinder_id' => 'required',
            'transmission_id' => 'required',
            'drivetrain_id' => 'required',
            'features' => 'sometimes|array',
            'image' => 'image|mimes:jpeg|max:5000'
        ], [
            'vin.required' => 'VIN is required',
            'model.required' => 'Model is required',
            'year.required' => 'Year is required',
            'make_id.required' => 'Make is required',
            'price.required' => 'Price is required',
            'location_id.required' => 'Location is required',
            'mileage.required' => 'Mileage is required',
            'owners.required' => 'Owners is required',
            'seats.required' => 'Seats is required',
            'type_id.required' => 'Body type is required',
            'color_id.required' => 'Color is required',
            'cylinder_id.required' => "Cylinder is required",
            'transmission_id.required' => 'Transmission is required',
            'drivetrain_id.required' => 'Drivetrain is required',
        ]);


        $vehicle->vin = $request->input('vin');
        $vehicle->model = $request->input('model');
        $vehicle->make_id = $request->input('make_id');
        $vehicle->year = $request->input('year');
        $vehicle->price = $request->input('price');
        $vehicle->location_id = $request->input('location_id');
        $vehicle->mileage = $request->input('mileage');
        $vehicle->owners = $request->input('owners');
        $vehicle->seats = $request->input('seats');
        $vehicle->type_id = $request->input('type_id');
        $vehicle->color_id = $request->input('color_id');
        $vehicle->cylinder_id = $request->input('cylinder_id');
        $vehicle->transmission_id = $request->input('transmission_id');
        $vehicle->drivetrain_id = $request->input('drivetrain_id');
        $vehicle->features = $request->input('features');

        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('uploads', $fileNameToStore, 'public');
            Storage::delete('public/uploads/' . $vehicle->image);
        }

        if ($request->hasFile('image')) {
            $vehicle->image = $fileNameToStore;
        }
        $vehicle->save();
        return redirect()->back()->with('success', 'Vehicle Updated');
        // return redirect('/admin/vehicles');
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:5'
        ]);

        $query = $request->input('query');
        $vehicles = Vehicle::where('vin', 'like', "%$query%")->get();

        return view('admin/vehicles/search-results', compact('vehicles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
