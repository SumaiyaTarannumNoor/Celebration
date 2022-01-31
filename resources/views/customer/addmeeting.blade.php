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
                                @if (Session::has('success'))
                                    <div class="alert alert-default">
                                        <p>{{ Session::get('success') }}</p>
                                    </div>

                                @endif
                                @if (Session::has('failed'))
                                    <div class="alert alert-default">
                                        <p>{{ Session::get('failed') }}</p>
                                    </div>

                                @endif

                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h2 class="card-text">Provider : {{ $provider->username }}</h2>

                                            <form method="POST" action="{{  route('customer.addmeeting', $provider->id) }}">
                                            @csrf
                                                <div class="form-group row">
                                                <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                                                <div class="col-md-6">
                                                    <input id="date" type="text" class="form-control datepicker" name="date" value="YYYY-MM-DD">


                                                </div>

                                            </div>
                                                <div class="form-group row">
                                                    <label for="time" class="col-md-4 col-form-label text-md-right">Time</label>

                                                    <div class="col-md-6">
                                                        <input id="time" type="time" class="form-control" name="time" value="HH-MM AA">


                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                                    <div class="col-md-6">
                                                        <input id="description" type="text" class="form-control" name="description" value="Say about your Event">


                                                    </div>

                                                </div>
                                                <button type="submit" class="btn btn-secondary">Confirm</button>
                                            </form>

                                        </div>
                                    </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </section>



        <script type="text/javascript">

            $('.datepicker').datepicker({
                startDate: new Date()
            });
        </script>




@endsection
