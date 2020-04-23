<?php

namespace App\Http\Controllers\admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function create(Vehicle $vehicle)
    {
        $galleries = DB::table('vehicles')
            ->join('galleries', 'vehicles.id', '=', 'galleries.model_id')
            ->selectRaw('galleries.id, galleries.image as image')
            ->where('galleries.model_id', '=', $vehicle->id)
            ->get();
        return view('admin.gallery.create', compact('vehicle', 'galleries'));
    }

    public function store()
    {
        $images = Collection::wrap(request()->file('image'));

        $images->each(function ($image) {
            $gallery = new Gallery;
            $fileNameWithExt = $image->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $image->storeAs('uploads/gallery', $fileNameToStore, 'public');
            $gallery->model_id = request()->input('model_id');
            $gallery->image = $fileNameToStore;
            $gallery->save();
        });
        return redirect()->back();
    }

    public function destroy(Vehicle $vehicle, Gallery $imageid)
    {
        $gallery = Gallery::find($imageid)->first();
        $imageid->delete();
        Storage::delete('public/uploads/gallery/' . $gallery->image);
        return redirect()->back();
    }
}
