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
                <h2>Our Mission</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.php">Home</a></li>
                    <li>Our Mission</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Feature Section Start -->
    <div class="container pt-100 pb-70">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 col-lg-7 col-md-8">
                <div class="section-title style-one">
                    <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg') }}" alt="Image">
                        Our Mission</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center feature-card-wrap">
            @foreach($missions as $mission)
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                <div class="mission-card">
                    <span><img src="{{asset('public/storage/mission/' .$mission->icon)}}"
                        alt="Image"></span>
                    <h3>{{$mission->title}}</h3>
                    <p>{{$mission->description}}</p> <br>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Feature Section End -->
@endsection
