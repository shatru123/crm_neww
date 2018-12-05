@extends('admin.layouts.main')

@section('content')


    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                {!! Form::open(['method'=>'POST', 'action'=> 'VehicleController@store','files'=>true]) !!}

                <h1>Add Vehicle Details </h1>

                <div class="form-group">
                    {!! Form::label('vehicle_type', 'Vehicle Type:') !!}
                    {!! Form::select('vehicle_type', array(1 => 'Truck', 0=> 'Pick Up', 2=> 'Other'), 0 , ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('vehicle_heading', 'Vehicle Name:') !!}
                    {!! Form::text('vehicle_heading', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('number_plate', 'Number Plate:') !!}
                    {!! Form::text('number_plate', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('Chassis_number', 'Chassis Number:') !!}
                    {!! Form::text('Chassis_number', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('Engine_number', 'Engine Number:') !!}
                    {!! Form::text('Engine_number', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('Make', 'Make:') !!}
                    {!! Form::text('Make', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('Model', 'Model:') !!}
                    {!! Form::text('Model', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('Badge', 'Badge:') !!}
                    {!! Form::text('Badge', null, ['class'=>'form-control'])!!}
                </div>



                <div class="form-group">
                {!! Form::label('Fuel_type', 'Fual Type:') !!}
                {!! Form::select('Fuel_type', array(0=>'Petrol',1 => 'Diesel', 2 =>'Gas',) , 0, ['class'=>'form-control'])!!}
                </div>



                <div class="form-group">
                    {!! Form::label('Tare', 'Tare:') !!}
                    {!! Form::text('Tare', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('GVM_ATM', 'GVM_ATM:') !!}
                    {!! Form::text('GVM_ATM', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('GCM_GTM', 'GCM_GTM:') !!}
                    {!! Form::text('GCM_GTM', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('no_of_wheels', 'No of Wheels:') !!}
                    {!! Form::select('no_of_wheels', [''=>"Select No of Wheels"] +$wheels ,0, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Add Vehicles Details', ['class'=>'btn btn-primary btn-submit']) !!}
                </div>

                {!! Form::close() !!}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>




@endsection


