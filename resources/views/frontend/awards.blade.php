@extends('frontend.layout.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-3">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Awards</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Awards & Certificate</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <div class="about-wrap style-two ptb-100">
            <div class="container">
            <div class="row g-3">
                @foreach ($award_list as $award)
                    <div class="col-lg-3">
                        <div class="testimonial-card style-three">
                                <img src="{{ asset('public/storage/award/' . $award->image) }}" alt="Image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
