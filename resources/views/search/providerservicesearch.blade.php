@extends('master')

@section('content')
@include('header2')

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

<div class="content-wrapper" style="background-color:white">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <br>
      <div class="container" style="background-color:#f8f9fa">
        <div class="boxz" style="border:1px white solid; margin-top:63px; margin-bottom:100px;padding:50px" </div>

          <h3 style="margin-top:-35px;text-align:center; color:black;font-family:Garamond"><strong> Services </strong> </h3>
<br>
          @if ($services->count())
          <div class="row">
            @foreach($services as $service)
            <div class="col-sm-6 col-md-4">
              <div class="card border-white">
                <div class="card-header" style="text-align:center;background-color:#301949;color:white">{{ $service->name }}</div>
                <!-- <img class="img-thumbnail" src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2020/05/salon-lockdown-1590854316.jpg" alt="Card image cap"> -->
                <div class="card-body">

                  <p class="card-text" style="text-align:center">Provider: {{ $service->provider_username}}</p>
                  <p class="card-text" style="text-align:center">Capacity:{{ $service->capacity }} Persons</p>
                  <p class="card-text" style="text-align:center">Price Range:{{ $service->pricerange }} BDT</p>
                  <p style="text-align:center"><a style="color:indigo"   href="service/{{$service->id}}/servicereview">Reviews</a>

                  </p>
                </div>
              </div>
            </div>


            @endforeach
            {{$services->links()}}
            @else
            <h5 style="text-align:center;margin:100px">No such services</h5>
          </div>
        </div>
        @endif


        </section>
      </div>


    </div>
  </div>
</div><!-- /.card-header -->
<div class="card-body" style="margin-bottom:20px">

</div><!-- /.card-body -->
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