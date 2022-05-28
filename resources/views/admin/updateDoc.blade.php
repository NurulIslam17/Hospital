
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css');
    <style type="text/css">
    	label
    	{
    		display: inline-block;
    		width: 200px;
    	}
    	.docHead
    	{
    		font-size: 30px;
    		font-weight: bold;
    	}
    	.formDiv
    	{
    		width: 700px;
    		margin: auto;

    	}
    	.addDoc
    	{
    		font-size: 18px;
    		font-weight: bold;
    	}
      .oldImg
      {
        text-align: center;
        display: inline-block;
        
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
  	
        		<form action="{{url('editDoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
        			@csrf
        			<div class="bg-light formDiv text-center text-dark p-5">
        				<h1 class="docHead">Update Doctor</h1>

	        			<div class="mt-4">
	        				<label>Doctor Name</label>
	        				<input type="text" class="text-dark" value="{{$data->name}}"  name="dName" required placeholder="Doctor Name">
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Phone</label>
	        				<input type="Number" class="text-dark"  value="{{$data->phone}}"  name="dphone" required  placeholder="Doctor Phone">
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Room No</label>
	        				<input type="text" class="text-dark" value="{{$data->room}}" name="room" required placeholder="Doctor Room">
	        			</div>

	        			<div class="mt-4">
	        				<label>Specility</label>
	        				<input type="text" class="text-dark" value="{{$data->specification}}" name="specification" required placeholder="Doctor Room">
	        			</div>

                <div class="mt-4 oldImg">
	        				<label>Old Image</label>
	        				<img height="100px" width="100px" src="doctorImg/{{$data->image}}">
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Doctor Image</label>
	        				<input type="file" class="text-dark" name="img">
	        			</div>

	        			<div class="mt-4">
	        				<input type="submit" value="Update Doctor" class="btn btn-primary bg-success p-2 addDoc">
	        			</div>
        			</div>
        		</form>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- JS -->
    @include('admin.script');
    <!-- End custom js -->
  </body>
</html>
