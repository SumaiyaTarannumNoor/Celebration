
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
                                <h1>Add Products</h1>
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
                            <form method="post" action="{{ route('provider.product.store') }}" role="form" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Title</label>
                                        <input type="text" class="form-control" name="title" style="background-color:white" placeholder="Enter Name of Product">
                                    </div>

                                    <div class="form-group">
                                    
                                        <label for="exampleInputEmail1">Product Price</label>
                                        <input type="number" class="form-control" name="price" style="background-color:white" placeholder="Enter price">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="description"style="background-color:white" rows="8" cols="80" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_image">Product Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="product_image" id="exampleInputFile">
                                                
                                            </div>


                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>



@endsection
