@extends('master')
@section('content')
    @include('header2')
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <div id="main">
        <section class="breadcrumbs">
            <div class="content-wrapper" style="background-color:white">
<section class="jumbotron text-center">
    <div class="content-wrapper" style="background-color:rgb(0, 0, 0)">
    <div class="container">
        <h1 class="jumbotron-heading" style="color:white">CART</h1>

    </div>
</section>

<div class="container mb-4">
    <div class="row">
        @php

        $total=App\Cart::all()->where('user_ip',request()->ip())->sum 
        (function($t){
             return $t->price* $t;
        });
        @endphp



        <!-- @if (Cart::isEmpty())
        
            <h1 class="alert alert-warning" style="margin-top:10px">Your shopping cart is empty.</h1>
            
        
        @else -->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Name</th>
                        <th scope="col">Available</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                        <td>{{ $item->name }}</td>
                        <td>In stock</td>
                        <td>1</td>
                        <td class="text-right">{{ $item->price }}</td>
                        <form method="POST" action="{{  route('customer.removeitem', $item->id)  }}">
                        @csrf
                        <td class="text-right"><button type ="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td>
                    
                    </form>
                    </tr>



                        
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="/customer/product"><button class="btn btn-light">Continue Shopping</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                <a href="/paymentmethod"><button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button></a>
                </div>
            </div>
        </div>
        <br>
<br>
<br>
<br>
<br>
<br>
<br>
            <!-- @endif -->
    </div>
</div>

        </section>
   
    </div>
@endsection