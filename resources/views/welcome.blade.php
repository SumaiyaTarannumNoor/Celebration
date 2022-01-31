@extends('master')

  <!-- ======= Header ======= -->

@section('content')

@include('header1')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Celebration</h1>
      <h2>Celebrate events efficiently</h2>
        @if(Auth::guard('customer')->check())
        <h1>Customer</h1>
            <h7> <i>This page is under construction </i> </h7>
        @elseif(Auth::guard('admin')->check())
            <h1>Admin</h1>
            <h7> <i>This page is under construction </i> </h7>
            @elseif(Auth::guard('provider')->check())
            <h1>Provider</h1>
            <h7> <i>This page is under construction </i> </h7>
        @else

              <a href="{{route('login')}}" class="btn-get-started">Sign in</a>
              <a href="{{route('customer.register')}}" class="btn-get-started">Register</a>




@endif



    </div>
  </section>
  @endsection
  <!-- End Hero Section -->

  <!-- ======= Footer ======= -->
