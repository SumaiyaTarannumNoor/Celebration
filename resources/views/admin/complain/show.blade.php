

@extends('master')

@section('content')
    @include('header2')
    
<!-- Content Wrapper. Contains page content -->

    <div id="main">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <section class="breadcrumbs">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-16">
                            <div class="content-wrapper" >
                            <div class="col-sm-30">
                                <div class="content-wrapper" style="background-color:black">
                                <h1 style="margin-left:10px">Submitted Complaints</h1>
                            </div>
                            <!--<div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Submitted Complains</li>
                                </ol>
                            </div> -->
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <div class="content-wrapper" style="background-color:rgb(10, 232, 248)">
                            <div class="card-body">
                               
                                <table id="example30" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
            
                                        <th>#</th>
                                        <th>Customer's Name</th>
                                        <th>Subject</th>
                                        <th>Provider's Name</th>
                                        <th>Details</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($complains as $complain)
                                        <tr>
                                            <td>{{ $complain->id }}</td>
                                            <td><h5>Owner : {{ $complain->customer->username }}</h5></td>
                                            <td>{{ $complain->subject }}</td>
                                            <td>{{ $complain->provider_name }}</td>
                                            <td>{{ $complain->details }}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>


                        </div>
                        <!-- /.card-body -->


                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </section>
            </div>
        </section>

    </div>

<script>
  $(function () {

    $('#example30').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



@endsection
