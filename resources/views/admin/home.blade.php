
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar-->
        @include('admin.sidebar');

      <!--- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- Navbar From -->
          @include('admin.navbar');
        <!-- main Paner-->
          @include('admin.mainBody');
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- JS -->
    @include('admin.script');
    <!-- End custom js -->
  </body>
</html>
