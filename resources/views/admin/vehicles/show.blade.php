@extends('layouts.admin')

@section('header-title',  $vehicle->model )

@section('content')

<a href="{{ route('gallery.create', [$vehicle]) }}" class="btn btn-primary mb-4">Add Gallery</a>

<table class="table table-bordered table-striped">
    <tbody>
        <tr>
            <td>
                <strong>VIN</strong>
                <td>{{ $vehicle->vin }}</td>
            </td>
        </tr>
      <tr>
        <td>
            <strong>Brand</strong>
        </td>
        <td>{{ $vehicle->make->name }}</td>
      </tr>
      <tr>
        <td>
            <strong>Model</strong>
        </td>
        <td>{{ $vehicle->model }}</td>
      </tr>
      <tr>
          <td>
              <strong>No. of Owners</strong>
            </td>
          <td>{{ $vehicle->owners }}</td>
      </tr>
      <tr>
        <td>
            <strong>Color</strong>
        </td>
        <td>{{ $vehicle->color->name }}</td>
      </tr>
      <tr>
        <td>
            <strong>Body Type</strong>
        </td>
        <td>{{ $vehicle->bodyType->name }}</td>
      </tr>
      <tr>
        <td>
            <strong>Model Year</strong>
        </td>
        <td>{{ $vehicle->year }}</td>
      </tr>
      <tr>
        <td>
            <strong>Mileage</strong>
        </td>
        <td>{{ number_format($vehicle->mileage) }} miles</td>
      </tr>
      <tr>
        <td>
            <strong>Cylinders</strong>
        </td>
        <td>{{ $vehicle->cylinder->name }}</td>
      </tr>
      <tr>
        <td>
            <strong>Seating</strong>
        </td>
        <td>{{ $vehicle->seats }}</td>
      </tr>
      <tr>
        <td>
            <strong>Transmission</strong>
        </td>
        <td>{{ $vehicle->transmission->name }}</td>
      </tr>
      <tr>
        <td>
            <strong>DriveTrain</strong>
        </td>
        <td>{{ $vehicle->drivetrain->name }}</td>
     </tr>

@if ($vehicle->features && count($vehicle->features) > 0)
    <tr>
        <td>
            <strong>Features</strong>
        </td>
        <td>
        @foreach ($vehicle->features as $feature)
            {{ $feature }},
        @endforeach    
        </td>
    </tr>
@endif
    </tbody>
</table>

<form action="{{ route('vehicle.sold', [$vehicle]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" value="{{ $vehicle->id }}">
    <button class="btn btn-primary mb-3">Sold</button>
</form>
@endsection