<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('partials.sidebar')


        <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          @include('partials.nav-admin')

          <!-- Begin Page Content -->
          <div class="container-fluid">

                @yield('content')

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @include('partials.footer-admin')

      </div>
      <!-- End of Content Wrapper -->


    @include('partials.logout-model')
    </div>
  <!-- End of Page Wrapper -->

    @include('partials.js')
</body>
</html>
