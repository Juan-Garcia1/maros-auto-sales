@extends('layouts.admin')

@section('header-title')
    Search Results
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
            @forelse ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>
                        {{ $vehicle->location->address }}
                        
                    </td>
                   
                    <td>{{ $vehicle->vin }}</td>
                    <td><a href="{{ route('vehicle.edit', [$vehicle]) }}">edit</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">
                        <p class="text-center">No results found</p>
                    </td>
                </tr>
            @endforelse
        
        </tbody>
    </table>

@endsection