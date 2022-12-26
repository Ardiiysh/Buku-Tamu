
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Buku Tamu | @yield('title')</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('template/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('template/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      @include('layouts.side')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
      @include('layouts.nav')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">@yield('title')</h4>
                    @yield('content')
 
                  </div>
                </div>
              </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @include('layouts.footer')
          <!-- partial -->
</div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset ('template/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset ('template/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset ('template/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset ('template/assets/js/misc.js')}}"></script>
    <script src="{{asset ('template/assets/js/settings.js')}}"></script>
    <script src="{{asset ('template/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>