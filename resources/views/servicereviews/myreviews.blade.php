@extends('master')

@section('content')
@include('header1')
@include('providersidebar')


<style>

.page-item.active .page-link {
    z-index: 3;
    color: white;
    background-color: #301949;
    border-color: #301949;
}
.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color:black;
    background-color: #fff;
    border: 1px solid #dee2e6;
}

</style>






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
                
             
              
 
                @if ($reviews->count())
                 
                @foreach($reviews as $review)
                
            <div class="row p-2 bg-white border rounded mt-2">

                
                <div class="mb-4">
                <a href="" class="font-bold" style="padding-left:14px; color:black">Service: {{$review->service->name}} Provider: {{$review->provider->username}}</a> 
               <p class="mb-2" style="padding-left:14px">Customers: {{$review->customer->username}}</p><span class="text-gray">Review: {{$review->comment}}</span>
               
                </div>
                @endforeach
                <div class="linkzz" style=" padding:0px 1px">
     {{$reviews->links()}}
    </div>
                @else
                <h5 style="text-align:center; margin-top:100px; margin-bottom:250px;color:grey">No posts</h5>
                @endif
                <p>There are no reviews </p>
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