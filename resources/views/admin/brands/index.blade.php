@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Brand Table</h4>
                <p class="card-description">
                    <a class="menu-icon mdi mdi-plus-circle" href="{{route('brands.create')}}">Add new</a>
                    {{--<code>.table-striped</code>--}}
                </p>
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if($brands)


                            @foreach($brands as $brand)


                                <tr>
                                    <td>{{$brand->id}}</td>

                                    <td><a href="{{route('brands.edit',$brand->id)}}">{{$brand->name}}</a></td>
                                    <td>{{$brand->created_at->diffForHumans()}}</td>
                                    <td>{{$brand->updated_at->diffForHumans()}}</td>
                                </tr>

                            @endforeach

                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection