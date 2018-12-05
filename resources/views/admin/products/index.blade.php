@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product Table</h4>
                <p class="card-description">
                 <a class="menu-icon mdi mdi-plus-circle" href="{{route('products.create')}}">Add new</a>
                    {{--<code>.table-striped</code>--}}
                </p>
                <script>
                    setTimeout(function() {
                        $('#success').fadeOut('fast');
                    }, 3000);
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
              <th>Type</th>
              <th>Brand</th>
              <th>Price</th>
              <th>Created</th>
              <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($products)


             @foreach($products as $product)


            <tr>
               <td>{{$product->id}}</td>
                <td><a href="{{route('products.edit',$product->id)}}">{{$product->name}}</a></td>
               <td>{{$product->type ?'Service' :'Product '}}</td>
                <td>{{$product->brand->name}}</td>
                <td>{{$product->price}}</td>
               <td>{{$product->created_at->diffForHumans()}}</td>
               <td>{{$product->updated_at->diffForHumans()}}</td>
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