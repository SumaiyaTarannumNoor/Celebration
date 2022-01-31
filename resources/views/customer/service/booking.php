@extends('master')

    @section('content')
        @include('header2')
        @include('customersidebar')
    <!-- Page Wrapper -->

        <section id="main">
            <section class="breadcrumbs">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">


                                <div class="content">
                                    @if($errors->any())
                                        <div class="row collapse">
                                            <ul class="alert-box warning radius">
                                                @foreach($errors->all() as $error)
                                                    <li> {{ $error }} </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                        <div class="col-md-10">
                                            @foreach($services as $service)
                                                <div class="row p-2 bg-white border rounded mt-2">

                                                    <div class="col-md-6 mt-1">
                                                        <h5>{{ $service->name }}</h5>
                                                        <h5>Owner : </h5>
                                                        <!-- <div class="d-flex flex-row">
                                                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                        </div> -->

                                                        <p class="text-justify text-truncate para mb-0">{{ $service->capacity }} Persons<br><br></p>
                                                    </div>
                                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <h4 class="mr-1">{{ $service->pricerange }} BDT</h4>

                                                        </div>
                                                        
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
