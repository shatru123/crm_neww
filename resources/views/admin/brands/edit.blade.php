@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                {!! Form::model($brand, ['method'=>'PATCH', 'action'=> ['BrandController@update', $brand->id],'files'=>true]) !!}

                <h1>Update Drivers Details</h1>
                <div class="form-group">
                    {!! Form::label('name', 'Brand:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Brand', ['class'=>'btn btn-primary col-sm-6']) !!}
                </div>

                {!! Form::close() !!}


                {!! Form::open(['method'=>'DELETE', 'action'=> ['BrandController@destroy', $brand->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Brand ', ['class'=>'btn btn-danger col-sm-6']) !!}
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
