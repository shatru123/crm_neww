@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Clients Table</h4>
                <p class="card-description">
                    <a class="menu-icon mdi mdi-plus-circle" href="{{route('clients.create')}}">Add new</a>
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
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Alt Mobile</th>
                            <th>Company</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if($clients)

                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td><a href="{{route('clients.edit',$client->id)}}">{{$client->name}}</a></td>
                                    <td>{!!html_entity_decode($client->address)!!}</td>
                                    <td>{{$client->primary_number}}</td>
                                    <td>{{$client->secondary_number}}</td>
                                    <td>{{$client->company_name}}</td>
                                    <td>{{$client->created_at->diffForHumans()}}</td>
                                    <td>{{$client->updated_at->diffForHumans()}}</td>
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