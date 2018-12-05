@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                {!! Form::model($client, ['method'=>'PATCH', 'action'=> ['ClientController@update', $client->id],'files'=>true]) !!}

                <h1>Update  Client Details</h1>

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('primary_number', 'Mobile:') !!}
                    {!! Form::text('primary_number', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('secondary_number', 'Alternate Mobile:') !!}
                    {!! Form::text('secondary_number', null, ['class'=>'form-control'])!!}
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
                    {!! Form::label('zipcode', 'Zipcode:') !!}
                    {!! Form::text('zipcode', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('city', 'City:') !!}
                    {!! Form::text('city', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('company_name', 'Company Name:') !!}
                    {!! Form::text('company_name', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Update Lead', ['class'=>'btn btn-primary col-sm-6']) !!}
                </div>

                {!! Form::close() !!}


                {!! Form::open(['method'=>'DELETE', 'action'=> ['ClientController@destroy', $client->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Client ', ['class'=>'btn btn-danger col-sm-6']) !!}
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