@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description">
                    <a class="menu-icon mdi mdi-plus-circle" href="{{route('vechicles.create')}}">Add new</a>
                    {{--<code>.table-striped</code>--}}
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Vehicle Name</th>
                            <th>Number Plate</th>
                            <th>Model</th>
                            <th>Fuel Type</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if($vehicles)


                            @foreach($vehicles as $vehicle)


                                <tr>
                                    <td>{{$vehicle->id}}</td>

                                    <td><a href="{{route('vechicles.edit',$vehicle->id)}}">{{$vehicle->vehicle_heading}}</a></td>
                                    <td>{{$vehicle->number_plate}}</td>
                                    <td>{{$vehicle->Model}}</td>
                                    <td>{{$vehicle->Fuel_type ?'Diesel' :'Petrol '  }}</td>
                                    <td>{{$vehicle->created_at->diffForHumans()}}</td>
                                    <td>{{$vehicle->updated_at->diffForHumans()}}</td>
                                </tr>

                            @endforeach

                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



@endsection