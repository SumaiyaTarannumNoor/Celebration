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

                            @foreach($meetings as $meeting)

                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h2 class="card-text">Provider : {{ $meeting->provider->username }}</h2>
                                            <h2 class="card-text">Date : {{ $meeting->scheduledtime }}</h2>
                                            <h2 class="card-text">Status : {{ $meeting->status }}</h2>


@if($meeting->status=='Pending')
                                                <div class="form-group row">



                                                    <h2>Pending</h2>
                                            </div>
                                            @else
                                                <div class="form-group row">



                                                    <button class="btn btn-secondary"><a href="{{ route('customer.showmessage', $meeting->id) }}" >Go to Message</a></button>
                                                </div>

@endif

                                        </div>
                                    </div>

                                @endforeach
                            </div>



                        </div>
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

        </section>







@endsection
