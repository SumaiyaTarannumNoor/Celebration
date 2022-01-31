@extends('master')

@section('content')
    @include('header2')
    @include('customersidebar')
<!-- Content Wrapper. Contains page content -->


    <div id="main">
        <section class="breadcrumbs">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1>Make an event</h1>
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

                        <p class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('customer.addevent') }}" role="form" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Event Title</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name of Event">
                                    </div>
<div class="form-group">
                                        <label for="exampleInputEmail1">Event Type</label>
                                        <input type="text" class="form-control" name="event_type" placeholder="Enter Type of Event">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Persons</label>
                                        <input type="number" class="form-control" name="amount" placeholder="Enter Person Number">
                                    </div>






                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                <h1>Booked Services </h1>
                                @foreach($services as $service)
                                
                                <h3>Service Name :{{ $service->service_name }}</h3>
                        @endforeach
                                    <button type="submit" class="btn btn-primary">Make Event</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>



@endsection
