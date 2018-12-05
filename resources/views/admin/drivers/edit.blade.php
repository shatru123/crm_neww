@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">






                {!! Form::model($driver, ['method'=>'PATCH', 'action'=> ['DriverController@update', $driver->id],'files'=>true]) !!}

                <h1>Update Drivers Details</h1>
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('mobile', 'Mobile:') !!}
                    {!! Form::text('mobile', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('alt_mobile', 'Alternate Mobile:') !!}
                    {!! Form::text('alt_mobile', null, ['class'=>'form-control'])!!}
                </div>

                <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
                <div class="form-group">
                    {!! Form::label('body', 'Address:') !!}
                    {!! Form::textarea('address', null, ['class'=>'form-control','id'=>'address'])!!}
                </div>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#address' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

                <div class="form-group">
                    {!! Form::label('city', 'City:') !!}
                    {!! Form::text('city', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('district', 'District:') !!}
                    {!! Form::text('district', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('pan_no', 'PAN CARD NO:') !!}
                    {!! Form::text('pan_no', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('adhar_no', 'Adhar Number:') !!}
                    {!! Form::text('adhar_no', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('license_no', 'License Number:') !!}
                    {!! Form::text('license_no', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), 0 , ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">



                    {!! Form::label('photo_id', 'Photo:') !!}
                    <br>
                    <img src="{{$driver->photo ? asset('images/backend/drivers')."/".$driver->photo : 'http://placehold.it/400x400'}}" width="100px" height="100px" class="rounded-circle" alt="image" />
                    {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Drivers', ['class'=>'btn btn-primary col-sm-6']) !!}
                </div>

                {!! Form::close() !!}


                {!! Form::open(['method'=>'DELETE', 'action'=> ['DriverController@destroy', $driver->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Drivers Detail', ['class'=>'btn btn-danger col-sm-6']) !!}
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection