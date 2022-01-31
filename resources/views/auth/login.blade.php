@extends('master')

<!-- ======= Header ======= -->

@section('content')

    @include('header1')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Welcome to Celebration</h1>
            <h2>Celebrate events efficiently</h2>


            <a href="{{route('admin.login')}}" class="btn-get-started">Admin Login</a>
            <a href="{{route('provider.login')}}" class="btn-get-started">Provider Login</a>
            <a href="{{route('customer.login')}}" class="btn-get-started">Customer Login</a>






        </div>
    </section>
@endsection
<!-- End Hero Section -->

<!-- ======= Footer ======= -->

