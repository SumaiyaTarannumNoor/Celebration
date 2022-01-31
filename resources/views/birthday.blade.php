@extends('master')

@section('content')
    @include('header2')

    <div id="main">
        <section class="breadcrumbs">
            <div class="container">
                <section class="tm-mb-1" id="about">
                    <div class="tm-row tm-about-row">
                        <div class="tm-section-1-l">
                            <img src="{{ asset('img/Birthday.jpg') }}" alt="About image" class="tm-img-responsive">
                        </div>

                        <article class="tm-section-1-r tm-bg-color-8">
                            <h2 class="tm-mb-2 tm-title-color">Birthday Management</h2>
                            <br>
                            <p>Birthday Functions are an important part of our culture and our social life.To complete your dream Function,we,Celebration,have various services to offer</p>

                            <a href="/customer/login" class="btn-get-started">More Detail</a>
                        </article>
                    </div>
                </section>
            </div>
        </section>
    </div>



@endsection
