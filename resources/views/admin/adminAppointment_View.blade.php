
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
    <style>

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
          <table class="table table-bordered table-striped bg-light">
            <thead class="bg-primary">
              <tr>
                <th class="fs-5 text-light" scope="col">Patient Name</th>
                <th class="fs-5 text-light" scope="col">Email</th>
                <th class="fs-5 text-light" scope="col">Doctor Name</th>
                <th class="fs-5 text-light" scope="col">Date</th>
                <th class="fs-5 text-light" scope="col">Message</th>
                <th class="fs-5 text-light" scope="col">Status</th>
                <th class="fs-5 text-light" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

            <!-- $serial = 0; -->
            @foreach($data as $x)
              <tr>
                  <td> {{$x->name}} </td>
                  <td> {{$x->email}} </td>
                  <td> {{$x->doctor}} </td>
                  <td> {{$x->date}} </td>
                  <td> {{$x->message}} </td>
                  <td> {{$x->status}} </td>
                  <td> 
                      <a class="btn btn-success" onclick="return confirm('Do you want to approve the request ?')"  href="{{url('approve',$x->id)}}">Approve</a>
                      <a class="btn btn-danger" onclick="return confirm('Do you want to cancel the request ?')" href="{{url('cancle',$x->id)}}">Cancle</a>
                      <a class="btn btn-primary" href="{{url('/sendMail',$x->id)}}">Send Mail</a>
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
