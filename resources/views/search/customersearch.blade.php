@extends('master')
@section('custom_style')


@endsection

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

<div class="content-wrapper" style="background-color:#f8f9fa">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <br>
      <div class="container" style="background-color:white">
        <div class="boxz" style="border:1px white solid;margin:30px; margin-top:63px; margin-bottom:100px;padding:50px" </div>

          <h3 style="margin-top:-35px;text-align:center; color:black;font-family:Garamond"><strong> Products </strong> </h3>

          @if ($products->count())
          <div class="row">
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4" style="padding:20px">

              <div class="card border-white" style="margin-top:-10px">
                <div class="card-header" style="text-align:center;background-color:#301949;color:white">{{ $product->title }}</div>
                <img class="img-thumbnail" src="{{ asset('img/' . $product->photo->image ) }}" alt="Card image cap">
                <div class="card-body" style="margin-bottom:-20px">

                  <p class="card-text" style="text-align:start;margin-bottom:5px">Provider: {{ $product->provider->username }}</p>
                  <p class="card-text" style="text-align:start">{{ $product->description }}</p>
                  <p class="card-text" style="text-align:start">Price:{{ $product->price }} BDT</p>
                  
                  
  
                  <div class="d-flex flex-nowrap" >
                    <div class="order-3">
                    <form method="POST" action="{{ route('customer.addtocart', $product->id) }}">
                    @csrf
                      <button type="submit" class="btn btn" > <i class="fas fa-cart-plus" ></i></button>
                      </form>
                    </div>

                    <div class="order-1 " style="margin-bottom:-10px">
                    <p class="card-text"><a href="product/{{$product->id}}/review" style="color:indigo; ">Reviews</a></p>
                     
                    </div>
                    <div class="order-2 " style="color:white">Third flex item</div>
                  </div>
                  
                   
       

                  
                </div>
              </div>
            </div>


            @endforeach

       
            {{ $products->links() }}
            @else
            <h5 style="text-align:center;margin:200px;padding-bottom:160px">No such products</h5>
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