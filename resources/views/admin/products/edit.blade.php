@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                {!! Form::model($product, ['method'=>'PATCH', 'action'=> ['ProductController@update', $product->id],'files'=>true]) !!}

                <h1>Update Product </h1>

                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::label('type', ' Type:') !!}
                    {!! Form::select('type', array(0=>'Product',1 => 'Service',) , 0, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('brand_id', 'Brand:') !!}
                    {!! Form::select('brand_id',  $brands , null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', null, ['class'=>'form-control'])!!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Update Product', ['class'=>'btn btn-primary col-sm-6']) !!}
                </div>

                {!! Form::close() !!}


                {!! Form::open(['method'=>'DELETE', 'action'=> ['ProductController@destroy', $product->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Product', ['class'=>'btn btn-danger col-sm-6']) !!}
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