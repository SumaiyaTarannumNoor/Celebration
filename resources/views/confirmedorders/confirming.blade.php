@extends('master')

@section('content')
@include('header2')
@include('customersidebar')



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
          <div class="card" style="width:100%; margin-right:25px; margin-top:5px; padding-bottom:50px">
            <div class="card-body">



              <div class="card" style="width:100%;padding:20px">
                <div class="card-header" style="background-color:#301949; color:white">

                  Service Confirmation Details
                </div>

                <form action="/add-confirm/{{$meeting->id}}" method="post">
                  @csrf

                  <div class="form-group">
                    <label for="customername">Customer Name</label>
                    <input type="text" class="form-control" id="customername" name="customername" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label for="providername">Service Provider Name</label>
                    <input type="text" class="form-control" id="providername" name="providername" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label for="eventtype">Event Type</label>
                    <input type="text" class="form-control" id="eventtype" name="eventtype" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label for="venue">Venue</label>
                    <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <input type="number" class="form-control" id="capacity" name="capacity"  placeholder="Enter capacity">
                  </div>
                 
                  <div class="form-group">
                    <label for="emailaddress">Email address</label>
                    <input type="email" class="form-control" id="emailaddress" name="emailaddress" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="phonenumber">Phone</label>
                    <input type="number" class="form-control" id="phonenumber" name="phonenumber" aria-describedby="phonenumber" placeholder="Enter phone number">
                  </div>
                  <div class="form-group">
                    <label for="shippingaddress">Address</label>
                    <input type="text" class="form-control" id="shippingaddress" name="shippingaddress" aria-describedby="shippingaddress" placeholder="Enter customer address">
                  </div>

                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount"  placeholder="Enter amount to pay">
                  </div>


                  <button type="submit" class="btn btn" style="background-color:#301949;color:white">I Confirm My Order</button>
                </form>

                

              </div>  <!-- <textarea name="fullname" id="fullname" class="form-control" placeholder="Enter your full name"></textarea>
                  <textarea name="emailaddress" id="emailaddress" class="form-control" placeholder="Enter your email address"></textarea>
                  <textarea name="phonenumber" id="phonenumber" class="form-control" placeholder="Enter your phone number"></textarea>
                  <textarea name="shippingaddress" id="shippingaddress" class="form-control" placeholder="Enter shipping address"></textarea>
                  <textarea name="rname" id="rname" class="form-control" placeholder="Enter receiver name"></textarea>
            </div>
          </div>
          @yield('content');
          <!-- Optional JavaScript; choose one of the two! -->

          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
          </body>

          </html>
          @endsection