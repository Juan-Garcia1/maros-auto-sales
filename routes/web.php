<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ListingController@index')->name('listing.index');
Route::get('inventory/{vehicle}-{slug}', 'ListingController@show')->name('listing.show');

Route::view('/contact', 'contact');

// Admin Dashboard
Route::view('admin', '/admin');

// Admin Vehicles Inventory
// Route::get('/admin/vehicles', 'admin\VehicleController@index')->name('vehicle.index');
// Route::get('/admin/vehicles/create', 'admin\VehicleController@create')->name('vehicle.create');

// Route::post('/admin/vehicles', 'admin/VehiclesController@store');
// Route::get('/admin/vehicles/{id}/edit', 'admin/VehiclesController@edit');
// Route::put('/admin/vehicles/{id}', 'admin/VehiclesController@update');

// Admin Settings
// Route::get('/admin/settings/general', tdb);
// Route::put('/admin/settings/general', tbd);
// Route::get('/admin/settings/social', tbd);
// Route::put('/admin/settings/social', tbd);

Auth::routes(['reset' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
