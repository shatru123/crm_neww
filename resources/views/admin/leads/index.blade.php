@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Leads Table</h4>
                <p class="card-description">
                 <a class="menu-icon mdi mdi-plus-circle" href="{{route('leads.create')}}">Add new</a>
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
              <th>Assigned To</th>
              <th>Created</th>
              <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($leads)

             @foreach($leads as $lead)
            <tr>
               <td>{{$lead->id}}</td>
                <td><a href="{{route('leads.edit',$lead->id)}}">{{$lead->name}}</a></td>
                <td>{!!html_entity_decode($lead->address)!!}</td>
               <td>{{$lead->mobile}}</td>
                <td>{{$lead->alt_mobile}}</td>
                <td>{{$lead->user->name}}</td>
               <td>{{$lead->created_at->diffForHumans()}}</td>
               <td>{{$lead->updated_at->diffForHumans()}}</td>
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