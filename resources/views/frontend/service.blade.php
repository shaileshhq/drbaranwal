@extends('frontend.layout.app')
@section('content')


        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-2">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Our Services</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="#">Home</a></li>
                        <li>Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Service Section Start -->
        <div class="service-wrap ptb-100 bg_optional">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($service_list as $service)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card style-three">
                            <span class="service-img">
                                <img src="{{ asset('public/storage/service/' . $service->image) }}" alt="Image">
                            </span>
                            <div class="service-info">
                                {{-- <img src="{{ asset('public/frontend_css/assets/img/services/service-card-shape.webp')}}" alt="Image" class="service-card-shape"> --}}
                                <h3><a href="#">{{ $service->title }}</a></h3>
                                <p>{{ $service->short_desc }}</p>
                                {{-- <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service Section End -->

     
@endsection
