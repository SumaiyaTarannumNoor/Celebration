
@extends ('master')
@section ('content')
    @include('header2')

    <section id="main">
        <section class="breadcrumbs">
    <div class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-8">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>

            @if(session('status'))
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success ! </strong>  &nbsp; {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="form">

                       <form method="POST" action="{{ route('sendmail') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label text-md-right">{{ __('Full Name') }}</label>

                                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname"   required autocomplete="Fullname" autofocus>

                                        @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">

                                    <div class="form-group">
                                        <label for="email" class="col-form-label text-md-right">{{ __('Email Address') }}</label>

                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-6">

                                    <div class="form-group">
                                        <label for="name" class="col-form-label text-md-right">{{ __('Subject') }}</label>

                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"  required autocomplete="subject" autofocus>

                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">

                                        <label for="message" class="col-form-label text-md-right">{{ __('Message') }}</label>

                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" required></textarea>

                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Message') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>
    </section>
@endsection


