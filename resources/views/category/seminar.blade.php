
@extends('master')

@section('content')
    @include('header2')

    <div id="main">
        <section class="breadcrumbs">
            <div class="container">
                <section class="tm-mb-1" id="about">
                    <div class="tm-row tm-about-row">
                        <div class="tm-section-1-l">
                        <img src="https://engineering.tamu.edu/student-life/_files/_images/_feature-images/speaker-talk-11Oct2018.jpg" alt="About image" class="tm-img-responsive">
                        </div>

                        <article class="tm-section-1-r tm-bg-color-8">
                            <h2 class="tm-mb-2 tm-title-color">Seminars</h2>
                            <br>
                            <p>We provide the essential services needed for a successful seminar. Search through our platform to find the best deals for your needs</p>

                            <a href="/customer/login" class="btn-get-started">More Detail</a>
                        </article>
                    </div>
                </section>
            </div>
        </section>
    </div>



@endsection