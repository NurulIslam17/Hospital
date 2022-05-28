
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
    <style>
      .imgs{
        height: 100px!important;
        width: 100px!important;
      }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar-->
        @include('admin.sidebar');

       <!-- Navbar From -->
        @include('admin.navbar');

        <!-- Add Doctor body -->
      <div class="container-fluid page-body-wrapper mt-5">

        <div class="container text-center">
        <table class="table table-bordered table-striped bg-white">
          <thead class="bg-primary">
            <tr>
              <th class="fs-5 text-light" scope="col">Name</th>
              <th class="fs-5 text-light" scope="col">Phone</th>
              <th class="fs-5 text-light" scope="col">Room</th>
              <th class="fs-5 text-light" scope="col">Specility</th>
              <th class="fs-5 text-light" scope="col">Image</th>
              <th class="fs-5 text-light" scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>

          @foreach($data as $x)
          <tr>
              <th> {{$x->name}} </th>
              <td> {{$x->phone}} </td>
              <td> {{$x->room}} </td>
              <td> {{$x->specification}} </td>
              <td class="text-center">  
                <img class="imgs" src="doctorimg/{{$x->image}}">
              </td>
              <td>
                <a class="btn btn-success" href="{{url('update',$x->id)}}">Update</a>
                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete data ?')" href="{{url('deleteDoc',$x->id)}}">Delete</a>
              </td>
            </tr>  
          @endforeach
          </tbody>
        </table>

        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- JS -->
    @include('admin.script');
    <!-- End custom js -->
  </body>
</html>
