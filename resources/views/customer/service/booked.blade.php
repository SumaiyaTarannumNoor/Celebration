@extends('master')

    @section('content')
        @include('header2')
 
    <!-- Page Wrapper -->

        <section id="main">
            <section class="breadcrumbs">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">


                                <div class="content">
                                    

                                        <div class="col-md-10">
                                            @foreach($services as $ser)
                                                <div class="row p-2 bg-white border rounded mt-2">

                                                    <div class="col-md-6 mt-1">
                                                    <h5>{{ $ser->service_name }}</h5>
                                                    <h5>Owner : {{ $ser->provider->username }}
                                                      
                                                       

                                                        <p class="text-justify text-truncate para mb-0">{{ $ser->capacity }} Persons<br><br></p>
                                                    </div>
                                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <h4 class="mr-1">{{ $ser->pricerange }} BDT</h4>

                                                        </div>
                                                        <a href="{{ route('customer.deleteservice', $ser->id) }}" class="btn btn-secondary">Remove</a>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>




                            </div>
                            
                        <a href="{{ route('customer.showaddevent') }}" class="btn btn-lg btn-secondary">Make An Event</a>
                        </div>

                    </div>
                </div>

    </section>







        @endsection
