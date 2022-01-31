

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
                        <div class="row mb-2">
                            <div class="content-wrapper" style="background-color:black">
                            <div class="col-sm-6">
                                <div class="content-wrapper" style="background-color:black">
                                <h1>Submitted Complaints</h1>
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
                               
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Subject</th>
                                        <th>Provider's Name</th>
                                        <th>Details</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($complains as $complain)
                                        <tr>
                                            <td>{{ $complain->id }}</td>
                                            <td>{{ $complain->subject }}</td>
                                            <td>{{ $complain->provider_name }}</td>
                                            <td>{{ $complain->details }}</td>
                                            <td>

                                                <a href="{{ route('customer.complain.edit', $complain->id) }}" class="btn btn-block btn-outline-primary btn-lg">Edit</a>
                                                <form method="post" action="{{ route('customer.complain.delete', $complain->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-block btn-outline-danger btn-lg">Delete</button>
                                                </form>













                                            </td>


                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>


                        </div>
                        <!-- /.card-body -->


                    </div>

                </section>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </section>

    </div>

<script>
  $(function () {

    $('#example2').DataTable({
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
