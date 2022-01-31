@extends('master')
@section('content')
    @include('header2')
    @include('customersidebar')

    <div class="hero-container" data-aos="zoom-in" data-aos-delay="10">
    <div id="main">

        <div class="content-wrapper" style="background-color:rgb(10, 232, 248)">

        <section class="breadcrumbs">
<div class="container mt-5 mb-5">
    <div class="content-wrapper" style="background-color:rgb(10, 232, 248)">

    <div class="content-wrapper" style="background-color:black">
    @if (Session::has('message'))

        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    <div class="d-flex justify-content-center row">

        <div class="col-md-10">
@foreach($products as $product)
            <div class="row p-2 bg-white border rounded mt-2">
                @foreach($product->image as $image)
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ asset('img/' . $image->image ) }}"></div>
                @endforeach
                    <div class="col-md-6 mt-1">
                    <h5>{{ $product->title }}</h5>
                    <h5>Owner : {{ $product->provider->username }}</h5>
                    <!-- <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div> -->

                    <p class="text-justify text-truncate para mb-0">{{ $product->description }}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">{{ $product->price }} BDT</h4>

                    </div>
                    <form method="POST" action="{{ route('customer.addtocart', $product->id) }}">
                        @csrf

                    <div class="d-flex flex-column mt-4"><button type="submit" class="btn btn-primary btn-lg" type="button">Add to Cart</button></div>
                    </form>
                </div>
            </div>
    @endforeach

        </div>
    </div>
</div>

    </div>

@endsection
