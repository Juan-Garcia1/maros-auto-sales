@extends('layouts.admin')

@section('header-title')
    Add Vehicle
@endsection

@section('content')
    <form action="/admin/vehicles" method="POST" enctype="multipart/form-data" class="py-5">
        @csrf
        <div class="row mb-5">
            <div class="col-md-3"><h5>Basic Information</h5></div>
            <!-- /.col-md-3 -->

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" placeholder="Mustang" value="{{ old('model') }}">
                            @error('model')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-5 -->

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" placeholder="2014" value="{{ old('year') }}">
                            @error('year')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-2 -->

                    <div class="col-md-5 col-sm-9">
                        <div class="form-group">
                            <label for="make">Make</label>
                            <select class="form-control @error('make_id') is-invalid @enderror" id="make" name="make_id">
                              <option selected value=""></option>
                              @foreach ($makes as $make)
                                <option value="{{ $make->id }}" @if (old('make_id') == $make->id) {{ 'selected' }} @endif>{{ $make->name }}</option>
                              @endforeach
                            </select>
                            @error('make_id')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-5 -->

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="22000" value="{{ old('price') }}">
                            @error('price')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-5 -->
                    
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select class="form-control @error('location_id') is-invalid @enderror" id="location" name="location_id">
                              <option></option>
                              @foreach ($locations as $location)
                                <option value="{{ $location->id }}" @if (old('location_id') == $location->id) {{ 'selected' }} @endif>{{ $location->address }}</option>
                              @endforeach
                            </select>
                            @error('location_id')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-sm-12 -->

                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="mileage">Mileage</label>
                            <input type="number" class="form-control @error('mileage') is-invalid  @enderror" id="mileage" name="mileage" placeholder="78000" value="{{ old('mileage') }}">
                            @error('mileage')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="col-md-4 col-6">
                        <div class="form-group">
                            <label for="owners">No. of Owners</label>
                            <input type="number" class="form-control @error('owners') is-invalid @enderror" id="owners" name="owners" placeholder="2" value="{{ old('owners') }}">
                            @error('owners')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="col-md-4 col-6">
                        <div class="form-group">
                            <label for="seats">No. of Seats</label>
                            <select class="form-control @error('seats') is-invalid @enderror" id="seats" name="seats">
                              <option value=""></option>
                              <option value="2" @if (old('seats') == 2) {{ 'selected' }} @endif>2</option>
                              <option value="4" @if (old('seats') == 4) {{ 'selected' }} @endif>4</option>
                              <option value="5" @if (old('seats') == 5) {{ 'selected' }} @endif>5</option>
                              <option value="7" @if (old('seats') == 7) {{ 'selected' }} @endif>7</option>
                              <option value="8" @if (old('seats') == 8) {{ 'selected' }} @endif>8</option>
                            </select>
                            @error('seats')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-2 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <div class="row mb-5">
            <div class="col-md-3">
                <h5>Body Type</h5>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="form-group">
                    <div class="row">
                        @foreach ($bodytypes as $bodytype)
                            <div class="col-md-3 col-4 mb-2">
                                <input type="radio" name="type_id" id="{{ $bodytype->name }}" value="{{ $bodytype->id }}" {{ old('type_id') == $bodytype->id ? 'checked' : '' }}>
                                <label for="{{ $bodytype->name }}" class="ml-1">{{ $bodytype->name }}</label>
                            </div>
                            <!-- /.col-md-4 -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                    @error('type_id')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <div class="row mb-5">
            <div class="col-md-3">
                <h5>Color</h5>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="form-group">
                    <div class="row">
                        @foreach ($colors as $color)
                            <div class="col-md-2 col-2">
                                <input class="color-radio" type="radio" name="color_id" id="{{$color->name}}" value="{{$color->id}}"  style="display:hidden;" hidden {{ old('color_id') == $color->id ? 'checked' : '' }}>
                                <label for="{{$color->name}}" style="width:60px;height:60px; padding:4px; border:solid 4px transparent; border-radius:50%; display:flex;justify-content:center;align-items:center;">
                                <div 
                                style="cursor:pointer; width: 40px; height:40px; border-radius:50%; background-color:{{$color->name}};" title="{{$color->name}}"></div>
                                </label>
                                <style>
                                    .color-radio:checked + label {
                                        border-color: green !important;
                                    }
                                </style>
                            </div>
                            <!-- /.col-md-2 -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                    @error('color_id')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <div class="row mb-5">
            <div class="col-md-3">
                <h5>Cylinders</h5>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="form-group">
                    <div class="row">
                        @foreach ($cylinders as $cylinder)
                            <div class="col-md-4 col-4 mb-2">
                                <input type="radio" name="cylinder_id" id="{{ $cylinder->name }}" value="{{ $cylinder->id }}" {{ old('cylinder_id') == $cylinder->id ? 'checked' : '' }}>
                                <label for="{{ $cylinder->name }}" class="ml-1">{{ $cylinder->name }}</label>
                            </div>
                            <!-- /.col-md-3 -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                    @error('cylinder_id')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <div class="row mb-5">
            <div class="col-md-3">
                <h5>Transmission</h5>
            </div>
            <!-- /.col-md-3 -->
            <div class="col md-9">
                <div class="form-group">
                    <div class="row">
                        @foreach ($transmissions as $transmission)
                            <div class="col-md-4 col-6 mb-2">
                                <input type="radio" name="transmission_id" id="{{ $transmission->name }}" value="{{ $transmission->id }}" {{ old('transmission_id') == $transmission->id ? 'checked' : '' }}>
                                <label for="{{ $transmission->name }}" class="ml-1">{{ $transmission->name }}</label>
                            </div>
                            <!-- /.col-md-4 -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                    @error('transmission_id')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
            <!-- /.col md-9 -->
        </div>
        <!-- /.row -->
        <div class="row mb-5">
            <div class="col-md-3">
                <h5>Drivetrain</h5>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="form-group">
                    <div class="row">
                        @foreach ($drivetrains as $drivetrain)
                            <div class="col-md-3 col-4 mb-2">
                                <input type="radio" name="drivetrain_id" id="{{ $drivetrain->name }}" value="{{ $drivetrain->id }}" {{ old('drivetrain_id') == $drivetrain->id ? 'checked' : '' }}>
                                <label for="{{ $drivetrain->name }}" class="ml-1">{{ $drivetrain->name }}</label>
                            </div>
                            <!-- /.col-md-4 -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                    @error('drivetrain_id')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <div class="row mb-5">
            <div class="col-md-3">
                <h5>Features</h5>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="form-group">
                    <div class="row">
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="sunroof" value="sunroof">
                                <label for="sunroof" class="ml-1">Sunroof</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="leather-seats" value="Leather Seats">
                                <label for="leather-seats" class="ml-1">Leather Seats</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="rearview-camera" value="rearview camera">
                                <label for="rearview-camera" class="ml-1">Rearview Camera</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="heated-seats" value="heated seats">
                                <label for="heated-seats" class="ml-1">Heated Seats</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="heated-steering-wheel" value="heated steering wheel">
                                <label for="heated-steering-wheel" class="ml-1">Heated Steering Wheel</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="gps" value="gps">
                                <label for="gps" class="ml-1">GPS</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="keyless-entry" value="keyless entry">
                                <label for="keyless-entry" class="ml-1">Keyless Entry</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="blind-spot-alert" value="blind spot alert">
                                <label for="blind-spot-alert" class="ml-1">Blind Spot Alert</label>
                            </div>
                            <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <div class="row mb-5">
            <div class="col-md-3"></div>
            <!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="form-group d-flex flex-column">
                    <label for="image">Vehicle Image</label>
                    <input class="py-2 @error('image') is-invalid @enderror" type="file" name="image" id="image">
                    @error('image')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <input type="submit" value="Add Vehicle" class="btn btn-primary">
    </form>
@endsection