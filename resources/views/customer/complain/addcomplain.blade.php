@extends('master')

@section('content')
    @include('header2')
    
<!-- Content Wrapper. Contains page content -->


    <div id=main">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <section class="breadcrumbs">
            <div class="content-wrapper">
                <div class="content-wrapper" style="background-color:black">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Add Complaint</h1>
                            </div>
                            
                            <!--<div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">General Form</li>
                                </ol>
                            </div> -->
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    <div class="container-fluid">
                    
                    @if (Session::has('success'))
                                    <div class="identity">
                                        <div><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                        <div>{{ Session::get('success') }}</div>
                                    </div>

                                @endif
                        <div class="content-wrapper" style="background-color:rgb(10, 232, 248)">
                        <div class="card card-primary">
                            <div class="content-wrapper" style="background-color:rgb(10, 232, 248)">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('customer.complain.store') }}" role="form" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Complain Subject</label>
                                        <input type="text" class="form-control" name="subject" placeholder="Enter the subject of the complain.">
                                    </div>

                                    <div class="form-group">
                                    
                                        <label for="exampleInputEmail1">Provider's Name</label>
                                        <input type="text" class="form-control" name="provider_name" placeholder="Enter provider's name">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Details</label>
                                        <textarea name="details" rows="8" cols="80" class="form-control"></textarea>
                                    </div>



                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Complain</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>



@endsection
