@extends('master')

@section('content')
@include('header2')
@include('customersidebar')






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
    <hr style="margin-top:45px; color:white; ">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->

                    <div class="card" style="width:100%; padding-bottom:200px">
                        <div class="card-header" style="background-color:#301934 ; color:white; text-align:center">

                            Payment Method
                        </div>
                        <br>
                        <br>

                       <a class="btn btn" style="background-color:#301934; color:white;display: block; margin: 0 auto; width: 50%; margin-top:100px" href="/bill" role="button">Proceed with Cash on
                            Delivery</a>
                        </br>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn" style="background-color:#301934; color:white;display: block; margin: 0 auto; width: 50%" data-toggle="modal" data-target="#exampleModal">
                            Proceed to Other Payment Methods
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{route('example_1')}}">
                                        @csrf
                                        <div class="modal-body"> 

                                            <!-- <div class="form-group">
                                                <label for="customer_name">Name</label>
                                                <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter receiver's full name">
                                            </div>  -->
                                            <div class="form-group">
                                                <label for="customer_email">Email address</label>
                                                <input type="email" class="form-control" id="customer_email" name="customer_email" aria-describedby="emailHelp" placeholder="Enter email address">
                                            </div>
                                            <div class="form-group">
                                                <label for="customer_phone">Phone Number</label>
                                                <input type="number" class="form-control" id="customer_phone" name="customer_phone" aria-describedby="customer_phone" placeholder="Enter receiver's phone number">
                                            </div>
                                            <div class="form-group">
                                                <label for="customer_address">Address</label>
                                                <input type="text" class="form-control" id="customer_address" name="customer_address" aria-describedby="customer_address" placeholder="Enter receiver's home address">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Proceed
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </ssdiv>
    </section>



</div>



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










































<!-- Content Wrapper. Contains page content -->