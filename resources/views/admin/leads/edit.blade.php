@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                {!! Form::model($lead, ['method'=>'PATCH', 'action'=> ['LeadController@update', $lead->id],'files'=>true]) !!}

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

                <h3><u>Requirements</u></h3>

                <div class="form-group">
                    {!! Form::label('type', ' Type:') !!}
                    {!! Form::select('type', array(0=>'Product',1 => 'Service',) , 0, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('assigned_to', 'Assign To:') !!}
                    {!! Form::select('assigned_to', $users, null,['class'=>'form-control'] ) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Lead', ['class'=>'btn btn-primary col-sm-6']) !!}
                </div>

                {!! Form::close() !!}


                {!! Form::open(['method'=>'DELETE', 'action'=> ['DriverController@destroy', $lead->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Lead ', ['class'=>'btn btn-danger col-sm-6']) !!}
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