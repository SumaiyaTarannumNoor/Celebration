<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex justify-content-between align-items-center">

    <div id="logo">

      <a href="{{ route('welcome')}}"><img src="{{ asset('img/logo1.png') }}" style="height: 32px ; width: 126px;" alt=""></a>

    </div>

    <nav id="navbar" class="navbar">
      <ul>

        <li><a class="nav-link scrollto" href="{{ route('welcome')}}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
        <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
        <li><a class="nav-link scrollto" href="{{ route('faq')}}">FAQ</a></li>



        <li class="dropdown"><a href="#"><span>Event Catagories</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('wedding')}}">Wedding</a></li>
            <li class="dropdown"><a href="#"><span>Corporate Function</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="{{ route('seminar')}}">Seminar</a></li>
                <li><a href="{{ route('conference')}}">Conference</a></li>
                <li><a href="{{ route('officeparty')}}">Office Event</a></li>


              </ul>
            </li>
            <li><a href="{{ route('birthday')}}">Birthday party</a></li>
            <li><a href="{{ route('wedding')}}">Social Function</a></li>

          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Essential Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{Route('catering')}}">Catering</a></li>
            <li><a href="{{Route('carrental')}}">Car Rental</a></li>
            <li><a href="{{Route('musicsystem')}}">Music System Rental</a></li>
            <li><a href="{{ route('parlour')}}">Parlour</a></li>
            <li><a href="{{ route('worker')}}">Worker</a></li>
            <li><a href="{{ route('gifts')}}">Gifts</a></li>



          </ul>
        </li>
        @if(Auth::guard('admin')->check())
        <li class="dropdown" aria-labelledby="navbarDropdown"><a href="#">
            <span> {{ Auth::guard('admin')->user()->username }} </span> <i class="bi bi-chevron-down"></i></a>
          <ul>
          <li> <a class="dropdown-item" href="{{ url('admin/dashboard') }}">Dashboard</a> </li>
            <li> <a class="dropdown-item" href='/admin/provider/create'>Add Providers</a> </li>
            <li> <a class="dropdown-item" href='/admin/customer/create'>Add Customer</a> </li>
            <li> <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
            </li>


            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
              @csrf
            </form>


          </ul>


        </li>
        @elseif(Auth::guard('customer')->check())
        <li class="dropdown" aria-labelledby="navbarDropdown"><a href="#">
            <span> {{ Auth::guard('customer')->user()->username }} </span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li> <a class="dropdown-item" href="/customer/dashboard">Dashboard</a> </li>
            <li> <a class="dropdown-item" href="{{route('customer.showprovider')}}">Schedule Meeting</a> </li>
            <li> <a class="dropdown-item" href="{{route('customer.meetinglist')}}">Chat Box</a> </li>
            <li> <a class="dropdown-item" href="{{route('customer.showproduct')}}">Products</a> </li>
            <li> <a class="dropdown-item" href="{{route('customer.allservice')}}">Service</a> </li>
            <li> <a class="dropdown-item" href="{{route('customer.showservice')}}">Booked Service</a> </li>
            <li> <a class="dropdown-item" href="{{route('admin.showcomplain')}}">Submitted Complaints</a> </li>
            <li> <a class="dropdown-item" href="/customer/cart">Cart</a> </li>
            <li> <a class="dropdown-item" href="{{ route('customer.logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
            </li>


            <form id="logout-form" action="{{ route('customer.logout') }}" method="POST">
              @csrf
            </form>


          </ul>


        </li>
        @elseif(Auth::guard('provider')->check())
        <li class="dropdown" aria-labelledby="navbarDropdown"><a href="#">
            <span> {{ Auth::guard('provider')->user()->username }} </span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li> <a class="dropdown-item" href="/provider/dashboard">Dashboard</a> </li>
            <li> <a class="dropdown-item" href="{{route('provider.allproducts')}}">Products List</a> </li>
            <li> <a class="dropdown-item" href="{{route('provider.createproduct')}}">Products Add</a> </li>

            <li><a class="dropdown-item" href="{{ route('provider.allservice') }}">Service List</a></li>
            <li><a class="dropdown-item" href="{{ route('provider.addservicepage') }}">Add Service</a></li>





            <li> <a class="dropdown-item" href="{{route('provider.showmeeting')}}">Meetings</a> </li>
            <li> <a class="dropdown-item" href="{{ route('provider.logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
            </li>


            <form id="logout-form" action="{{ route('provider.logout') }}" method="POST">
              @csrf
            </form>


          </ul>


        </li>
        @else <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
        <li><a class="nav-link scrollto" href="{{ route('customer.register') }}">Register</a></li>
        @endif


      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header>
<!-- End Header -->

<!-- ======= Hero Section =======
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Celebration</h1>
      <h2>Celebrate events efficiently</h2>


        <p>You are logged in already.</p>
        <p> please continue to use service </p>
        <p> <i>This page is under construction </i> </p>

    </div>
  </section>