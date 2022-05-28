
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <base href="/public">
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

    @include('admin.css');
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
  	
        		<form action="{{url('send',$data->id)}}" method="POST">
        			@csrf
        			<div class="bg-light formDiv text-center text-dark p-5">

							@if(session()->has('msg'))
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										
									</button>
									{{session()->get('msg')}}
								</div>
							@endif

        				<h1 class="docHead">Send mail to the patient...</h1>

	        			<div class="mt-4">
	        				<label>Greeting</label>
	        				<input type="text" class="text-dark" name="greet" required placeholder="Greeting">
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Body</label>
	        				<input type="text" class="text-dark" name="body" required  placeholder="Body">
	        			</div>
	        			
	        			<div class="mt-4">
	        				<label>Action Text</label>
	        				<input type="text" class="text-dark" name="actTex" required placeholder="Action Text">
	        			</div>
                <div class="mt-4">
	        				<label>Action Url</label>
	        				<input type="text" class="text-dark" name="actUrl" required placeholder="Action Url">
	        			</div>
                <div class="mt-4">
	        				<label>End Text</label>
	        				<input type="text" class="text-dark" name="endText" required placeholder="End Text">
	        			</div>

	        			<div class="mt-4">
	        				<input type="submit" value="Send Mail" class="btn btn-primary bg-success p-2 addDoc">
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
