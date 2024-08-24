@extends('frontend.layout.app')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp') }}" alt="Image"
            class="br-shape-one bounce sm-none">
        <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp') }}" alt="Image"
            class="br-shape-two moveHorizontal sm-none">
        <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp') }}" alt="Image"
            class="br-shape-three">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Our Staff</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.php">Home</a></li>
                    <li>Our Staff</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Start Team -->
    <div class="cta-team-wrap ptb-100">
        <div class="team-wrap">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-xxl-6 col-xl-8 col-lg-7 col-md-8">
                        <div class="section-title style-one">
                            <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg') }}" alt="Image">
                                Our Staff</span>
                            <h2>Our Staff</h2>
                        </div>
                    </div>
                    <div class="team-slider-btn slider-btn">
                        <div class="team-prev prev-btn" tabindex="0" role="button" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-b182210bf063fb810" aria-disabled="false"><img
                                src="{{ asset('public/frontend_css/assets/img/left-arrow.svg') }}" alt="Image"></div>
                        <div class="team-next next-btn swiper-button-disabled" tabindex="-1" role="button"
                            aria-label="Next slide" aria-controls="swiper-wrapper-b182210bf063fb810" aria-disabled="true">
                            <img src="{{ asset('public/frontend_css/assets/img/right-arrow.svg') }}" alt="Image"></div>
                    </div>
                </div>
                <div class="team-card-wrap">
                    <div class="team-slider swiper">
                        <div class="swiper-wrapper">
                            @foreach($staff as $team)
                            <div class="swiper-slide">
                                <div class="team-card style-two">
                                    <div class="team-img">
                                        <img src="{{asset('public/storage/team/' .$team->image)}}"
                                            alt="Image">
                                    </div>
                                    <div class="team-info">
                                        <h3><a href="#">{{$team->name}}</a></h3>
                                        <span>{{$team->designation}}</span>
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
    <!-- End Team -->
@endsection
