
<!DOCTYPE html>
<html lang="en">
  <head>
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
  	
        		<form action="{{url('uPdoctor')}}" method="POST" enctype="multipart/form-data">
        			@csrf
        			<div class="bg-light formDiv text-center text-dark p-5">

							@if(session()->has('msg'))
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										
									</button>
									{{session()->get('msg')}}
								</div>
							@endif

        				<h1 class="docHead">Add Doctor</h1>

	        			<div class="mt-4">
	        				<label>Doctor Name</label>
	        				<input type="text" class="text-dark" name="dName" required placeholder="Doctor Name">
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Phone</label>
	        				<input type="Number" class="text-dark" name="dphone" required  placeholder="Doctor Phone">
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Room No.</label>
	        				<input type="text" class="text-dark" name="room" required placeholder="Doctor Room">
	        			</div>

	        		   <div class="mt-4">
		        				<label>Specility</label>
		        				<select name="specification" style="width:220px">
		        					<option>--Select--</option>
		        					<option value="Heart">Heart</option>
		        					<option value="Skin">Skin</option>
		        					<option value="Eye">Eye</option>
		        					<option value="Nose">Nose</option>
											<option value="Dentist">Dentist</option>
		        				</select>
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Doctor Image</label>
	        				<input type="file" class="text-dark" name="img">
	        			</div>

	        			<div class="mt-4">
	        				<input type="submit" value="Add Doctor" class="btn btn-primary bg-success p-2 addDoc">
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
