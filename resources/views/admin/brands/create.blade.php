@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['method'=>'POST', 'action'=> 'BrandController@store','files'=>true]) !!}

                <h1>Brand</h1>
                <div class="form-group">
                    {!! Form::label('name', 'Brand:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Add Brand', ['class'=>'btn btn-primary']) !!}
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