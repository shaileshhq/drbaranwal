@extends('frontend.layout.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-3">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Media</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Media</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($media_list as $media)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card style-one">
                            <div class="blog-card-img">
                                <img src="{{ asset('public/storage/media/' . $media->image) }}" alt="Image">
                            </div>
                            <div class="blog-card-info">
                                <a href="{{route('media.detail', $media->slug)}}" class="blog-date"><i class="flaticon-calendar"></i>{{ $media->created_at->format('d M Y') }}</a>
                                <h3><a href="{{route('media.detail', $media->slug)}}">{{ $media->title }}</a></h3>
                                <a href="{{route('media.detail', $media->slug)}}" class="link-one">Read More...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog Details End -->
@endsection
