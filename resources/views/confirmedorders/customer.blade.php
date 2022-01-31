@extends('master')

@section('content')
@include('header2')
@include('customersidebar')

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

    <div class="content-wrapper" style="background-color:white;padding-bottom:10px">
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
              <div class="card" style="width:100%; margin-right:25px; height:800px;margin-top:5px">
              <div class="card-header" style="text-align:center;color:white;background-color:#301934"><strong>Product Orders (Cash On Delivery)</strong></div>
            <div class="card-body">
            
            <a href="/onlinepayment" class="btn btn " style="background-color:#301934;color:white;margin-bottom:10px;margin-left:-8px" role="button" aria-pressed="true">Show Online Payments</a>

              
<!-- 
              <div class="card" style="width:100%">
                <div class="card-header" style="background-color:indigo; color:white">
            
                  My Reviews
                </div> -->
                
             
              
 
               
                 
                @if ($confirmedorders->count())
                <div class="row">
              
                <table class="table">
               
  <thead class="thead-dark">
    <tr>

      <th scope="col sm-12">Order Id</th>
      <th scope="col sm-12">Provider </th>
      <th scope="col sm-12">Product</th>
      <th scope="col sm-12">Quantity</th>
      <th scope="col sm-12">Price</th>
      <th scope="col sm-12">Email</th>
      <th scope="col sm-12">Address</th>
      <th scope="col sm-12">Phone</th>
      <th scope="col sm-12">Order Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($confirmedorders as $order)
    <tr>
    <td>{{$order->id}}</td>
      <td>{{$order->username}}</td>
      <td>{{$order->title}}</td>
      <td>{{$order->quantity}}</td>
      <td>{{$order->price}}</td>
      <td>{{$order->emailaddress}}</td>
      <td>{{$order->shippingaddress}}</td>
      <td>{{$order->phonenumber}}</td>
      <td>{{$order->created_at}}</td>
   
    </tr>
    @endforeach
  
  </tbody>
</table>
<div class="linkSs" style=" padding:0px 0px">
    {{$confirmedorders->links()}}
</div>
                </div>

               

               @else
               <h5 style="text-align:center; margin-top:100px; margin-bottom:250px;color:grey">Empty</h5>
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