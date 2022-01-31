@extends('master')

    @section('content')
        @include('header2')
        
    <!-- Page Wrapper -->

        <section id="main">
            <section class="breadcrumbs">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">


                                <div class="card-body">



                                    <div class="card-deck">
                                        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
                                        @foreach($providers as $provider)

                                        <div class="card bg-light">
                                            <div class="card-body text-center">
                                                <h2 class="card-text">{{ $provider->username }}</h2>
                                                <p class="card-text"> Provider</p>

                                           <a href="{{ route('customer.showmeeting', $provider->id) }}" class="btn btn-secondary">Schedule</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>



                            </div>
                        </div>
                    </div>
                </div>

    </section>







        @endsection
