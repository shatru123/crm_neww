@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">




                {!! Form::model($lead, ['method'=>'PATCH', 'action'=> ['LeadController@update', $lead->id],'files'=>true]) !!}

                    @csrf
                <div class="card text-left">
                    <div class="card-header">
                        Lead Details
                    </div>

                    <div class="card-body  text-left">
                        <div class="row">
                           <div class="col-md-2 ">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Name:</li>
                                    <br>
                                    <li class="list-group-item">Mobile:</li>
                                    <br>
                                    <li class="list-group-item">Alternate Mobile:</li>
                                    <br>
                                    <li class="list-group-item">Address:</li>
                                    <br>
                                    <li class="list-group-item">Assign To:</li>
                                </ul>

                           </div>
                            <div class="col-md-8 ">
                                <ul class="list-group list-group-flush">
                                   <li class="list-group-item"> {!! Form::text('name', null, ['class'=>'form-control'])!!}</li>
                                    <li class="list-group-item"> {!! Form::text('mobile', null, ['class'=>'form-control'])!!}</li>
                                      <li class="list-group-item">{!! Form::text('alt_mobile', null, ['class'=>'form-control'])!!}</li>
                                     {{--<li class="list-group-item">{!!html_entity_decode($lead->address)!!}</li>--}}
                                     <li class="list-group-item">{!! Form::textarea('address', null, ['class'=>'form-control','id'=>'address' , 'rows'=>'1'])!!}</li>

                                       <li class="list-group-item">{!! Form::select('assigned_to', $users, null,['class'=>'form-control'] ) !!}</li>
                                </ul>
                            </div>
                        </div>
                        {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                        <br>
                        {!! Form::close() !!}
                        <br>




                        {{--{!! Form::submit('Update Lead ', ['class'=>'btn btn-primary col-sm-2']) !!}--}}
                        <div class="card text-left">
                            <div class="card-header">
                              <h5>Requirements</h5>
                                <ul class="nav nav-tabs">
                                    <li><a data-toggle="tab" href="#product" class="btn btn-info">Products</a></li>
                                    &nbsp
                                    <li><a data-toggle="tab" href="#service" class="btn btn-info">Services</a></li>

                                </ul>
                            </div>

                                <div class="tab-content">
                                    {{---------------------------------------------}}
                                    <script>
                                        setTimeout(function() {
                                            $('#success').fadeOut('fast');
                                        }, 1000);
                                    </script>

                                    @if(session()->has('message'))
                                        <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;" id="success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif

                                    @if(session()->has('del_message'))
                                        <div class="alert alert-danger alert-dismissable custom-success-box" style="margin: 15px;" id="success">
                                            {{ session()->get('del_message') }}
                                        </div>
                                    @endif


                                    {{----------------------------------------------------}}
                                    <div id="product" class="tab-pane fade in active">
                                        {{--<h3>Products</h3>--}}
                                        <p>
                                        <div class="col-lg-6 stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title active">Products</h4>



                                                    <p class="card-description">
                                                    {!! Form::open(['method'=>'POST', 'action'=> 'RequirementController@store','files'=>true]) !!}
                                                        <div class="form-group">

                                                                <input type="hidden" value="{{$lead->id}}" name="lead_id">
                                                            <input type="hidden" value="0" name="type">

                                                            <label for="title">Title</label>
                                                            <div class="form-group">
                                                                <div id="div">
                                                                    <button onclick ="appendRow1()" value="Add Row"><i class="menu-icon mdi mdi-plus-box primary"></i> </button>
                                                                </div>
                                                            </div>

                                                            {!! Form::text('product_or_service_id', null, ['class'=>'form-control'])!!}

                                                        </div>

                                                    {!! Form::submit('Add Requirements', ['class'=>'btn btn-success']) !!}

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
                                        <script>
                                            var x=1
                                            function appendRow1()
                                            {
                                                var d = document.getElementById('div');
                                                d.innerHTML += "<input type='text' name='product_or_service_id' id='tst"+ x++ +"' class='form-control' placeholder='Add New Product'><br>";
                                            }
                                        </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </p>
                                    <div id="service" class="tab-pane fade">

                                        <p>
                                            <div class="col-lg-6 stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Services</h4>

                                                {{---------------------------------------------}}
                                                        <script>
                                                            setTimeout(function() {
                                                                $('#success').fadeOut('fast');
                                                            }, 1000);
                                                        </script>

                                                        @if(session()->has('message'))
                                                            <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;" id="success">
                                                                {{ session()->get('message') }}
                                                            </div>
                                                        @endif

                                                        @if(session()->has('del_message'))
                                                            <div class="alert alert-danger alert-dismissable custom-success-box" style="margin: 15px;" id="success">
                                                                {{ session()->get('del_message') }}
                                                            </div>
                                        @endif


                                        {{----------------------------------------------------}}



                                        <p class="card-description">
                                        {!! Form::open(['method'=>'POST', 'action'=> 'RequirementController@store','files'=>true]) !!}
                                        <div class="form-group">

                                            <input type="hidden" value="{{$lead->id}}" name="lead_id">
                                            <input type="hidden" value="1" name="type">

                                            <label for="title">Title</label>
                                            <div class="form-group">
                                                <div id="div1">
                                                    <button onclick ="appendRow()" value="Add Row"><i class="menu-icon mdi mdi-plus-box primary"></i> </button>
                                                </div>
                                            </div>

                                    {!! Form::text('product_or_service_id', null, ['class'=>'form-control'])!!}


                                        </div>

                                        {!! Form::submit('Add Requirements', ['class'=>'btn btn-success']) !!}

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

                                        <script>
                                            var x=1
                                            function appendRow()
                                            {
                                                var d = document.getElementById('div1');
                                                d.innerHTML += "<input type='text' name='product_or_service_id' id='tst"+ x++ +"' class='form-control' placeholder='Add New Service' ><br>";
                                            }
                                        </script>

                                                    </div>
                                                </div>
                                        </div>


                                      </p>
                                    </div>

                                </div>

                        </div>


               </div>

    <div class="card-footer text-muted">
    </div>

    </div>



@endsection