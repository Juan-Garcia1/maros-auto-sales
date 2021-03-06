@extends('layouts.admin')

@section('header-title', 'Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Vehicles Sold By Body Type</h3>
            </div>
            <div class="card-body">
                <canvas id="sold-vehicles-by-type"></canvas>
            </div>
            <!-- /.card-body-->
        </div>
    </div>
    <!-- /.col-md-8 -->

    <div class="col-md-4">
    <div class="small-box bg-success">
        <div class="inner">
            <h3>${{ number_format($revenue) }}</h3>
    
            <p>Revenue</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
    </div>
    <div class="small-box bg-primary">
        <div class="inner">
            <h3>{{ $vehiclesSold }}</h3>
    
            <p>Total Vehicles Sold</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
    </div>
    <div class="small-box bg-primary">
        <div class="inner">
            <h3>{{ number_format($inventory) }}</h3>
    
            <p>Inventory</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
    </div>
</div>
<!-- /.col-md-4 -->
</div>
<!-- /.row -->

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Vehicles Sold In The Past 12 Months</h3>
    </div>
    <div class="card-body">
        <canvas id="sold-vehicles-by-month" height="150"></canvas>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Remaining Inventory</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Body Type</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventoryByBodyTypes as $inventoryByBodyType)
                            <tr>
                                <td>
                                    {{ $inventoryByBodyType->name }}
                                </td>
                                <td>{{ $inventoryByBodyType->vehicle_inventory }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Vehicles Sold By Color</h3>
            </div>
            <div class="card-body">
                <canvas id="sold-vehicles-by-color" height="220"></canvas>
            </div>
        </div>
    </div>
    <!-- /.col-md-6 -->
</div>
<!-- /.row -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Inventory Remaining By Location</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                    <tr>
                        <td>{{ $location->address }}</td>
                        <td>{{ $location->vehicles->count() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" charset="utf-8"></script>
    <script>
        var soldVehiclesByType = document.getElementById('sold-vehicles-by-type').getContext('2d');
        var soldVehiclesByColor = document.getElementById('sold-vehicles-by-color').getContext('2d');
        var soldVehiclesByMonth = document.getElementById('sold-vehicles-by-month').getContext('2d');
        var url = "{{url('chart/data')}}";
        
        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                soldVehiclesByTypeChart.data.labels = data.bodyType;
                soldVehiclesByTypeChart.data.datasets[0].data = data.total;

                soldVehiclesByColorChart.data.labels = Array.from(new Set(data.colors));
                soldVehiclesByColorChart.data.datasets[0].data = data.colorSold;
                soldVehiclesByColorChart.data.datasets[0].backgroundColor = Array.from(new Set(data.colors));

                soldVehiclesByMonthChart.data.labels = data.months;
                soldVehiclesByMonthChart.data.datasets[0].data = data.monthsTotal;

                soldVehiclesByTypeChart.update();
                soldVehiclesByColorChart.update();
                soldVehiclesByMonthChart.update();
            },
            error: function(data) {
                console.log(data);
            }
        });

        var soldVehiclesByTypeChart = new Chart(soldVehiclesByType, {
            type:'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data:{
                labels: [],
                datasets:[{
                label:'total',

                data: [],
                backgroundColor:'#e6f3ff',
                borderWidth:1,
                borderColor: '#339cff'
                }]
            },
            options:{
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                legend:{
                display:false,
                },
                layout:{
                padding:{
                    left:0,
                    right:0,
                    bottom:0,
                    top:0
                }
                },
                tooltips:{
                enabled:true
                },
            }
        });

        var soldVehiclesByColorChart = new Chart(soldVehiclesByColor, {
            type:'pie',
            data:{
                labels: [],
                datasets:[{
                label:'colors',

                data: [],
                backgroundColor: [],
                }]
            },
            options:{
                legend: {
                    position: 'bottom'
                }
            }
        });

        var soldVehiclesByMonthChart = new Chart(soldVehiclesByMonth, {
            type:'line',
            data:{
                labels: [],
                datasets:[{
                label:'total',

                data: [],
                backgroundColor:'#e6f3ff',
                borderWidth:1,
                borderColor: '#339cff'
                }]
            },
            options:{
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                legend:{
                display:false,
                },
                layout:{
                padding:{
                    left:0,
                    right:0,
                    bottom:0,
                    top:0
                }
                },
                tooltips:{
                enabled:true
                },
            }
        });
</script>
@endsection