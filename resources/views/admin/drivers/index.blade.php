@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description">
                 <a class="menu-icon mdi mdi-plus-circle" href="{{route('drivers.create')}}">Add new</a>
                    {{--<code>.table-striped</code>--}}
                </p>
   <div class="table-responsive">
 <table class="table table-striped">
        <thead>
          <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Address</th>
              <th>Mobile</th>
              <th>Alt Mobile</th>
              <th>Created</th>
              <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($drivers)


             @foreach($drivers as $driver)


            <tr>
               <td>{{$driver->id}}</td>
                <td>
                    <img src="{{$driver->photo ? asset('images/backend/drivers')."/".$driver->photo : 'http://placehold.it/400x400'}}" width="100px" height="100px"  class="table-hover"   />
                </td>
                <td><a href="{{route('drivers.edit',$driver->id)}}">{{$driver->name}}</a></td>
                <td>{!!html_entity_decode($driver->address)!!}</td>
               <td>{{$driver->mobile}}</td>
                <td>{{$driver->alt_mobile}}</td>
               <td>{{$driver->created_at->diffForHumans()}}</td>
               <td>{{$driver->updated_at->diffForHumans()}}</td>
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