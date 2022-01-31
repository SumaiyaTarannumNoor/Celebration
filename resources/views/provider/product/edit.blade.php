
@extends ('master')
@section ('content')
    @include('header2')
    @include('providersidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="card card-primary">
  <!-- /.card-header -->
  <!-- form start -->
    <form method="post" action="{{ route('provider.product.update' , $product->id) }}" role="form" enctype="multipart/form-data">
      @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Title</label>
                <input type="text" class="form-control" name="title" value="{{ $product->title }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }} ">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
            </div>



        </div>

    <!-- /.card-body -->

    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Product</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>


@endsection
