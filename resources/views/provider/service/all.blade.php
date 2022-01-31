@extends('master')

    @section('content')
        @include('header2')
        @include('providersidebar')
    <!-- Page Wrapper -->

        <section id="main">
            <section class="breadcrumbs">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                        @if (Session::has('success'))
                                    <div class="alert alert-secondary">

                                        <div>{{ Session::get('success') }}</div>
                                    </div>

                                @endif


                                <div class="card-body">
@foreach($services as $service)

                                    <div class="card-deck">
                                        <div class="card bg-light">
                                            <div class="card-body text-center">
                                                <h2 class="card-text">{{ $service->name }}</h2>
                                                <p class="card-text">{{ $service->capacity }} Persons</p>
                                                <p class="card-text">{{ $service->pricerange }} BDT</p>
                                                <a href="{{ route('provider.service.edit', $service->id) }}" class="btn btn-secondary btn-sm">Edit Service</a>
                                                <form method="post" action="{{ route('provider.service.delete', $service->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-secondary btn-sm">Delete Service</button>
                                                </form>
                                            </div>





                                        </div>
                                    </div>
                                    @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>







        @endsection
