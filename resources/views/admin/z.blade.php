
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
        <h2>Test Appointment</h2>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- JS -->
    @include('admin.script');
    <!-- End custom js -->
  </body>
</html>
