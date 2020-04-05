@extends('layouts.app')

@section('content')
<section class="listing_detail_header parallex-bg" style="background-image:url(http://themes.webmasterdriver.net/carforyouwp/wp-content/uploads/2017/01/listing-detail-header-img.jpg )">
    <div class="container">
      <div class="listing_detail_head white-text div_zindex row">
        <div class="col-md-9">
        <h2>{{ $vehicle->model }}</h2>
                  <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $vehicle->location->address }}</span></div>
                  <div class="add_compare">
            
      
  
          </div>
        </div>
        <div class="col-md-3">
                  <div class="price_info">
            <p class="pcd-pricing"><span class="pcd-price">
              ${{ number_format($vehicle->price) }}</span></p>
          </div>
                </div>
      </div>
    </div>
    <div class="dark-overlay"></div>
  </section>
  
  <!-- /Listing-detail-header -->
  
  
  <!--Listing-detail-->
  
  <section class="listing-detail">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <img style="width: 100%;" src="{{ asset('storage/uploads/'.$vehicle->image) }}" alt="{{ $vehicle->model }}">
          <div class="space-20"></div>
          <div class="main_features">
            <ul>
                <li> <i class="fa fa-tachometer" aria-hidden="true"></i>
                    <h5>{{ number_format($vehicle->mileage) }}</h5>
                    <p>Mileage</p>
                </li>
                <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                    <h5>{{ $vehicle->year }}</h5>
                    <p>Year</p>
                </li>
                <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h5>{{ $vehicle->cylinder->name }}</h5>
                    <p>No. Cylinders</p>
                </li>
                <li> <i class="fa fa-power-off" aria-hidden="true"></i>
                    <h5>{{ $vehicle->transmission->name }}</h5>
                    <p>Transmission</p>
                </li>
                <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <h5>{{ $vehicle->seats }}</h5>
                    <p>Seats</p>
                </li>
                <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h5>{{ $vehicle->drivetrain->name }}</h5>
                    <p>DriveTrain</p>
                </li>
            </ul>
          </div>

          <div class="space-20"></div>
          <div class="divider"></div>
          
          <div class="table-responsive"> 
                    
                    <!--Basic-Info-Table-->
                    
                    <table>
                      <thead>
                        <tr>
                          <th colspan="2">Basic Information</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Brand</td>
                          <td>{{ $vehicle->make->name }}</td>
                        </tr>
                        <tr>
                          <td>Model</td>
                          <td>{{ $vehicle->model }}</td>
                        </tr>
                        <tr>
                            <td>No. of Owners</td>
                            <td>{{ $vehicle->owners }}</td>
                        </tr>
                        <tr>
                          <td>Color</td>
                          <td>{{ $vehicle->color->name }}</td>
                        </tr>
                        <tr>
                          <td>Body Type</td>
                          <td>{{ $vehicle->bodyType->name }}</td>
                        </tr>
                        <tr>
                          <td>Model Year</td>
                          <td>{{ $vehicle->year }}</td>
                        </tr>
                        <tr>
                          <td>Mileage</td>
                          <td>{{ number_format($vehicle->mileage) }} miles</td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--Technical-Specification-Table-->
                    
                    <table>
                      <thead>
                        <tr>
                          <th colspan="2">Technical Specification</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Cylinders</td>
                          <td>{{ $vehicle->cylinder->name }}</td>
                        </tr>
                        <tr>
                          <td>Seating Capacity</td>
                          <td>{{ $vehicle->seats }}</td>
                        </tr>
                        <tr>
                          <td>Transmission Type</td>
                          <td>{{ $vehicle->transmission->name }}</td>
                        </tr>
                        <tr>
                          <td>DriveTrain</td>
                          <td>{{ $vehicle->drivetrain->name }}</td>
                        </tr>
                    </tbody>
                    </table>

                    @if ($vehicle->features && count($vehicle->features) > 0)
                      <!--Features-Table-->
                      <table>
                        <thead>
                          <tr>
                            <th colspan="2">Features</th>
                          </tr>
                        </thead>
                        <tbody id="accessoriestable">
                            @foreach ($vehicle->features as $feature)
                              <tr>                      
                                <td>{{ $feature }}</td>
                                <td>
                                  <i class="fa fa-check" aria-hidden="true"></i>
                                </td>
                              </tr>
                            @endforeach    
                          </tbody>
                        </table>
                    @endif
                  </div>
      </div>

      <div class="col-md-3" style="position: sticky; top: 20px;">
        <div class="sidebar_widget">
            <div class="widget_heading">
      <h5><i class="fa fa-filter" aria-hidden="true"></i>Interested?</h5>
    </div>
    @if ($vehicle->location->id === 1)

      <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2972.256290568034!2d-87.7322248848287!3d41.84431007550763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e324ee51cf1ab%3A0xc2a9c53b39195ed7!2sMaros%20Auto%20Sales%20Inc!5e0!3m2!1sen!2sus!4v1584387121078!5m2!1sen!2sus" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    @else 
    
    <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.2654902697645!2d-87.74788648470705!3d41.86563407922322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e330572425311%3A0x74af61f0b2d96429!2s4813%20W%20Roosevelt%20Rd%2C%20Chicago%2C%20IL%2060804!5e0!3m2!1sen!2sus!4v1586032829256!5m2!1sen!2sus" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
    @endif
    <div class="space-20"></div>
    <a href="/contact" class="btn btn-block">Contact Us</a>
            
  </div>
          

      </div>
      
    </div>
  </section>
  
  <!--/Listing-detail-->
 
@endsection