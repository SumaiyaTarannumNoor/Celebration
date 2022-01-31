@extends('master')

@section('content')
@include('header1')








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
    <aside class="main-sidebar sidebar-primary elevation-4" style="background-color:#000000">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light" style="color:white;margin-top:10px;font-size:30px">Celebration</span>
        <hr style="color:white;margin-bottom:1px "</hr>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
      <h3 style="color:white"> </h3>
        <div class="card" style="padding:20px">
     
          <img src="data:image/png;base64,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">
          
        </div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          
          
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
                  About
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Products
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Gallery
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <p style="color:white">
                  Reviews
                  
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

    <div class="content-wrapper" style="background-color:black;padding-bottom:10px">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <hr style="margin-top:40px; color:white">
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card" style="width:100%; margin-right:25px; height:800px">
            <div class="card-body">
              
              

              <div class="card" style="width:100%">
                <div class="card-header" style="background-color:#B21449 ; color:white">
                  Reviews
                </div>
                <div class="card-body">
                
                  <form action="{{route('review')}}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">

                      <input type="text" name="writereview" class="form-control" placeholder="Write a review" id="writereview">
                      <br>
                      <button type="submit" class="btn btn" style="background-color:#B21449 ; color:white">Submit</button>
                     
                    </div>
                  </form>
                 
                </div>
              

                @if ($review->count())
                @foreach($review as $review)
                <div class="mb-4">
                <a href="" class="font-bold" style="padding-left:14px; color:black">{{$review->customer->username}}</a> <span class="text-gray">{{$review->created_at}}</span>
               <p class="mb-2" style="padding-left:14px">{{$review->body}}</p>
                </div>
                @endforeach
                @else
                <p>There are no posts </p>
                @endif

              </div>
            </div>
          </div>
          </div>
        </div><!-- /.card-header -->
       
    </div>

    </section>
  </div>



  @yield('content');
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


@endsection