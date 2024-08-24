@extends('frontend.layout.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-10">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Media Details</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('media')}}">Media</a></li>
                        <li>Media Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-wrap ptb-100">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-5">
                        <div class="single-img">
                            <img src="{{ asset('public/storage/media/' . $media_detail->image) }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h1>{{ $media_detail->title }}</h1>
                        <button href="#" class="btn btn-date"><i class="flaticon-calendar"></i> {{ $media_detail->created_at->format('d M Y') }}</button>
                        <div class="single-para">
                            <p>{!! $media_detail->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details End -->
@endsection
