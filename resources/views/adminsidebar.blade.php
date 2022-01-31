






<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Celebration Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-primary elevation-4" style="background-color:#B21449">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <!-- <span class="brand-text font-weight-light" style="color:white;margin-top:10px;font-size:30px">Celebration</span>
        <hr style="color:white;margin-bottom:1px "</hr> -->
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

          <img src="data:image/png;base64,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" class="img-thumbnail" style="padding:5px">
          <span class="brand-text font-weight-light" style="color:white;margin-left:10px;font-size:25px">Username</span>

        </div>
        <hr style="color:white">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
            <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search events" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  My Profile

                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Update Profile

                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  My Inbox

                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Add Customer

                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Add Provider

                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>






          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->




  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('dist/js/demo.js')}}"></script>
</body>

</html>
