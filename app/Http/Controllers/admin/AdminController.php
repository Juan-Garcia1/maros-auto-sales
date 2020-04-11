<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiclesSold = Vehicle::onlyTrashed()->count();
        $revenue = Vehicle::onlyTrashed()->sum('price');
        return view('admin.index', compact('vehiclesSold', 'revenue'));
    }

    public function chart()
    {
        $vehicles = DB::table('vehicles')
            ->join('body_types', 'vehicles.type_id', '=', 'body_types.id')
            ->join('colors', 'vehicles.color_id', '=', 'colors.id')
            ->selectRaw('body_types.name, COUNT(vehicles.id) as total, colors.name as colors')
            ->where('vehicles.sold_at', '!=', null)
            ->groupBy('body_types.name')
            ->get();
        $vehicleColors = DB::table('vehicles')
            ->join('colors', 'vehicles.color_id', '=', 'colors.id')
            ->selectRaw('COUNT(vehicles.id) as total, colors.name as colors')
            ->where('vehicles.sold_at', '!=', null)
            ->groupBy('colors.name')
            ->get();
        $colors = $vehicleColors->pluck('colors');
        $colorSold = $vehicleColors->pluck('total');
        $bodyType = $vehicles->pluck('name');
        $total = $vehicles->pluck('total');

        return response()->json(compact('colors', 'colorSold', 'bodyType', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
