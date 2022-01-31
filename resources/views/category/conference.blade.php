
@extends('master')

@section('content')
    @include('header2')

    <div id="main">
        <section class="breadcrumbs">
            <div class="container">
                <section class="tm-mb-1" id="about">
                    <div class="tm-row tm-about-row">
                        <div class="tm-section-1-l">
                        <img src="https://smartplaces.eu/wordpress/wp-content/uploads/2017/11/FG_7275.jpg" alt="About image" class="tm-img-responsive">
                        </div>

                        <article class="tm-section-1-r tm-bg-color-8">
                            <h2 class="tm-mb-2 tm-title-color">Conference</h2>
                            <br>
                            <p>We provide the essential services needed for a successful conference. Search through our platform to find the best deals for your needs</p>

                            <a href="/customer/login" class="btn-get-started">More Detail</a>
                        </article>
                    </div>
                </section>
            </div>
        </section>
    </div>



@endsection