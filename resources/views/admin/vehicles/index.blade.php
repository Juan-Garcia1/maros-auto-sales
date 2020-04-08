@extends('layouts.admin')

@section('header-title')
    Vehicles
@endsection

@section('content')
    @include('includes.search-form')

    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Model</th>
            <th>Location</th>
            <th>VIN</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>
                        {{ $vehicle->location->address }}
                        {{-- <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div> --}}
                    </td>
                    {{-- <td><span class="badge bg-danger">55%</span></td> --}}
                    <td>{{ $vehicle->vin }}</td>
                    <td><a href="{{ route('vehicle.edit', [$vehicle]) }}">edit</a></td>
                </tr>
            @endforeach
        
        </tbody>
    </table>
    
    <div class="d-flex justify-content-end">
        {{ $vehicles->links() }}
    </div>

@endsection