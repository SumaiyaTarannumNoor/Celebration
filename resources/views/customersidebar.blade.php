






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

<body class="hold-transition sidebar-mini layout-fixed" >
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-primary elevation-4" style="background-color:#301934; margin-top:100px">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
       <!-- <img src="http://127.0.0.1:8000/img/logo1.png" style="    height: 32px;width: 126px;  margin-top: 15px;margin-left: 50px" alt=""> -->
        <!-- <span class="brand-text font-weight-light" style="color:white;margin-top:10px;font-size:30px">Celebration</span> -->
        <!-- <hr style="color:white;margin-bottom:1px "</hr> -->
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset (Auth::guard('customer')->user()->image) }}" class="img-circle" >
        </div>
        <div class="info">
        <a href="{{ route('customer.profile') }}" class="d-block" style="color:white; text-transform:uppercase">{{ Auth::guard('customer')->user()->username }}</a>
        </div>
      </div>

        <!-- <hr style="color:white"> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
            <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search3223">
        <form class="d-flex" type="get" action="{{ url ('/customersearch')}}">
        <input class="form-control me-2" name="query" type="search" placeholder="Search products" aria-label="Search">
      
      </form>
        
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

            </li>

            <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
            <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search111">
           <form class="d-flex" type="get" action="{{ url ('/customerservicesearch')}}">
        <input class="form-control me-2" name="searchquery" type="search" placeholder="Search services" aria-label="Search">
      
      </form>
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

            </li>
            <!-- <li class="nav-item">
              <a href="{{ route('customer.dashboard') }}" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <!-- <p style="color:white">
                  My Profile
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                <!-- </p>
              </a> -->
            </li> 
           
           <li class="nav-item">
            <a href="{{ url('customer/profile') }}" class="nav-link">
              <i class="far fa-user"></i>
              <p>
              <p style="color:white">
                Update Profile 
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href='/myconfirmedorders' class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                Product Orders
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('customer.meetinglist') }}" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Meeting history
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
          
            <li class="nav-item">
              <a href="{{ route('customer.showservice') }}" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Booked Service
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('customer.createcomplain') }}" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                   Submit A Complaint
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('customer.allcomplains') }}" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Submitted Complaints
                  
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