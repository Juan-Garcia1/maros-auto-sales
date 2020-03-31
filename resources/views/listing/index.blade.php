@extends('layouts.app')
@section('content')
          
    <!--Page Header-->

    <section class="page-header faq_page" style="background-image:url(http://themes.webmasterdriver.net/carforyouwp/wp-content/uploads/2017/01/listing-page-header-img.jpg )">

    <div class="container">

        <div class="page-header_wrap">

        <div class="page-heading">

            <h1>Car Listing</h1>

        </div>

        </div>

    </div>

    <!-- Dark Overlay-->

    <div class="dark-overlay"></div>

    </section>

    <section class="listing-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="result-sorting-wrapper">
                <div class="sorting-count">
                    <p>{{ $vehicles->total() }}<span> Listings</span></p>
                </div>
                <div class="result-sorting-by">
        <p>Price:  </p>
        <a href="{{ route('listing.index', ['make' => request()->make, 'bodyType' => request()->bodyType, 'sort' => 'low_high']) }}">Low to High</a> | 
        <a href="{{ route('listing.index', ['make' => request()->make, 'bodyType' => request()->bodyType, 'sort' => 'high_low']) }}">High to Low</a>
    </div>
            </div>
    
    @forelse ($vehicles as $vehicle)
        <div class="product-listing-m gray-bg">

        {{-- <div class="product-listing-img">
            <a href="{{ route('listing.show', [$vehicle, Str::slug($vehicle->model)]) }}">
                <img class="img-responsive" src="{{ $vehicle->image }}" />
            </a>
        </div> --}}

        <div class="product-listing-content">

        {{-- <h5><a href="vehicle/{{ $vehicle->id."-".Str::slug($vehicle->model) }}">{{ $vehicle->model }}</a></h5> --}}
        <h5><a href="{{ route('listing.show', [$vehicle, Str::slug($vehicle->model)]) }}">{{ $vehicle->model }}</a></h5>

            
            <p class="list-price">${{ number_format($vehicle->price) }}</p>

            
            <ul>

            <li><i class="fa fa-tachometer" aria-hidden="true"></i>{{ number_format($vehicle->mileage) }}</li><li><i class="fa fa-user" aria-hidden="true"></i>{{ $vehicle->seats }} seats</li><li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $vehicle->year }}</li><li><i class="fa fa-car" aria-hidden="true"></i>{{ $vehicle->transmission->name }}</li><li><i class="fa fa-cogs" aria-hidden="true"></i>{{ $vehicle->drivetrain->name }}</li>
            </ul>

        <a href="{{ route('listing.show', [$vehicle, Str::slug($vehicle->model)]) }}" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>

        </div>
    </div>
        
        @empty
        <p style="text-align: center;"><strong>No vehicles found</strong></p>
        
    @endforelse

    {{-- {{ $vehicles->appends(request()->input())->links() }} --}}
    {{ $vehicles->links() }}

</div>
        <aside class="col-md-3 col-md-pull-9">
            
    <div class="widgets-sidebar">


    <div class="sidebar_widget">

        
        <div class="widget_heading">

        <h5><i class="fa fa-filter" aria-hidden="true"></i>Make</h5>

        </div>
        <ul>
            @foreach ($makes as $make)
                <li><a class="link" href="{{ route('listing.index', ['make' => $make->slug, 'bodyType' => request()->bodyType, 'sort' => request()->sort]) }}">{{ $make->name }}</a></li>
            @endforeach
        </ul>
        
    </div>

    <div class="sidebar_widget">
        <div class="widget_heading">

            <h5><i class="fa fa-filter" aria-hidden="true"></i>Body Type</h5>
    
            </div>
            <ul>
                @foreach ($bodyTypes as $bodyType)
                    <li><a href="{{ route('listing.index', ['make' => request()->make, 'bodyType' => $bodyType->slug, 'sort' => request()->sort]) }}">{{ $bodyType->name }}</a></li>
                @endforeach
            </ul>
    </div>
    
        @if (request()->make && request()->bodyType)
            <a class="btn btn-block" href="/">Filter Reset</a>
        @endif

    </div>

    <!--/Side-Bar-->

        </aside>
        </div>
    </div>
    </section>
@endsection