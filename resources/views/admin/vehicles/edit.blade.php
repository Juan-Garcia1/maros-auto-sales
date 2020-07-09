@extends('layouts.admin')

@section('css-styles')
    <style>
        #thumbnail-container img {
            width: 25%;
        }
    </style>
@endsection

@section('header-title')
    Edit Vehicle
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{ route('vehicle.update', [$vehicle->id]) }}" method="POST" enctype="multipart/form-data" class="py-5">
        @csrf
        @method('PUT')
        <div class="row mb-5">
            <div class="col-md-3"><h5>Basic Information</h5></div>
            <!-- /.col-md-3 -->

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="vin">Vin</label>
                            <input type="text" class="form-control @error('vin') is-invalid @enderror" name="vin" id="vin" value={{ $vehicle->vin }}>
                            @error('vin')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-3 -->
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" placeholder="Mustang" value="{{ $vehicle->model }}">
                            @error('model')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" placeholder="2014" value="{{ $vehicle->year }}">
                            @error('year')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <label for="make">Make</label>
                            <select class="form-control @error('make_id') is-invalid @enderror" id="make" name="make_id">
                              <option selected value=""></option>
                              @foreach ($makes as $make)
                                <option value="{{ $make->id }}" @if ($vehicle->make_id == $make->id) {{ 'selected' }} @endif>{{ $make->name }}</option>
                              @endforeach
                            </select>
                            @error('make_id')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="22000" value="{{ $vehicle->price }}">
                            @error('price')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-3 -->
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select class="form-control @error('location_id') is-invalid @enderror" id="location" name="location_id">
                              <option></option>
                              @foreach ($locations as $location)
                                <option value="{{ $location->id }}" @if ($vehicle->location_id == $location->id) {{ 'selected' }} @endif>{{ $location->address }}</option>
                              @endforeach
                            </select>
                            @error('location_id')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-4 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="mileage">Mileage</label>
                            <input type="number" class="form-control @error('mileage') is-invalid  @enderror" id="mileage" name="mileage" placeholder="78000" value="{{ $vehicle->mileage }}">
                            @error('mileage')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="col-md-4 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="owners">No. of Owners</label>
                            <input type="number" class="form-control @error('owners') is-invalid @enderror" id="owners" name="owners" placeholder="2" value="{{ $vehicle->owners }}">
                            @error('owners')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-4 -->

                    <div class="col-md-4 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="seats">No. of Seats</label>
                            <select class="form-control @error('seats') is-invalid @enderror" id="seats" name="seats">
                              <option value=""></option>
                              <option value="2" @if ($vehicle->seats == 2) {{ 'selected' }} @endif>2</option>
                              <option value="4" @if ($vehicle->seats == 4) {{ 'selected' }} @endif>4</option>
                              <option value="5" @if ($vehicle->seats == 5) {{ 'selected' }} @endif>5</option>
                              <option value="7" @if ($vehicle->seats == 7) {{ 'selected' }} @endif>7</option>
                              <option value="8" @if ($vehicle->seats == 8) {{ 'selected' }} @endif>8</option>
                            </select>
                            @error('seats')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
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
                                <input type="radio" name="type_id" id="{{ $bodytype->name }}" value="{{ $bodytype->id }}" {{ $vehicle->type_id == $bodytype->id ? 'checked' : '' }}>
                                <label for="{{ $bodytype->name }}" class="ml-1">
                                    <img class="img-responsive" style="width:80%; cursor:pointer;" src="{{ asset('images/'.$bodytype->image) }}" alt="{{ $bodytype->name }}" title="{{ $bodytype->name }}">
                                </label>
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
                                <input class="color-radio" type="radio" name="color_id" id="{{$color->name}}" value="{{$color->id}}"  style="display:hidden;" hidden {{ $vehicle->color_id == $color->id ? 'checked' : '' }}>
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
                                <input type="radio" name="cylinder_id" id="{{ $cylinder->name }}" value="{{ $cylinder->id }}" {{ $vehicle->cylinder_id == $cylinder->id ? 'checked' : '' }}>
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
                                <input type="radio" name="transmission_id" id="{{ $transmission->name }}" value="{{ $transmission->id }}" {{ $vehicle->transmission_id == $transmission->id ? 'checked' : '' }}>
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
                                <input type="radio" name="drivetrain_id" id="{{ $drivetrain->name }}" value="{{ $drivetrain->id }}" {{ $vehicle->drivetrain_id == $drivetrain->id ? 'checked' : '' }}>
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
                        {{-- @foreach ($vehicle->features as $feature) --}}
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="sunroof" value="sunroof" {{ $vehicle->features && in_array('sunroof', $vehicle->features) ? 'checked' : '' }}>
                                <label for="sunroof" class="ml-1">Sunroof</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="leather-seats" value="Leather Seats" {{ $vehicle->features && in_array('Leather Seats', $vehicle->features) ? 'checked' : '' }}>
                                <label for="leather-seats" class="ml-1">Leather Seats</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="rearview-camera" value="rearview camera" {{ $vehicle->features && in_array('rearview camera', $vehicle->features) ? 'checked' : '' }}>
                                <label for="rearview-camera" class="ml-1">Rearview Camera</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="heated-seats" value="heated seats" {{ $vehicle->features && in_array('heated seats', $vehicle->features) ? 'checked' : '' }}>
                                <label for="heated-seats" class="ml-1">Heated Seats</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="heated-steering-wheel" value="heated steering wheel" {{ $vehicle->features && in_array('heated steering wheel', $vehicle->features) ? 'checked' : '' }}>
                                <label for="heated-steering-wheel" class="ml-1">Heated Steering Wheel</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="gps" value="gps" {{ $vehicle->features && in_array('gps', $vehicle->features) ? 'checked' : '' }}>
                                <label for="gps" class="ml-1">GPS</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="keyless-entry" value="keyless entry" {{ $vehicle->features && in_array('keyless entry', $vehicle->features) ? 'checked' : '' }}>
                                <label for="keyless-entry" class="ml-1">Keyless Entry</label>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-3 col-6 mb-2">
                                <input type="checkbox" name="features[]" id="blind-spot-alert" value="blind spot alert" {{ $vehicle->features && in_array('blind spot alert', $vehicle->features) ? 'checked' : '' }}>
                                <label for="blind-spot-alert" class="ml-1">Blind Spot Alert</label>
                            </div>
                            <!-- /.col-md-4 -->
                        {{-- @endforeach --}}
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
                    <label for="thumbnail">Vehicle Image</label>
                <input class="py-2 @error('image') is-invalid @enderror" type="file" accept="image/jpeg" name="image" id="thumbnail" value="">
                    @error('image')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>
                <div id="thumbnail-container">
                    <img src="{{ asset('storage/uploads/'.$vehicle->image) }}" alt="{{ $vehicle->model }}">
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@endsection

@section('scripts')
    <script>
        const thumbnailInput = document.querySelector('#thumbnail');
        const thumbnailContainer = document.querySelector('#thumbnail-container');
        
        thumbnailInput.addEventListener('change', function(e) {
            e.stopPropagation();
            let reader = new FileReader();
    
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.setAttribute('src', e.target.result);
                
                if(!thumbnailContainer.hasChildNodes()) {
                    thumbnailContainer.append(img);
                } else {
                    thumbnailContainer.innerHTML = "";
                    thumbnailContainer.append(img);
                }
            };
            reader.readAsDataURL(this.files[0]);
        });
        
    </script>
@endsection