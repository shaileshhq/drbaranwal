@extends('frontend.layout.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-3">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Blog</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($blog_list as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card style-one">
                            <div class="blog-card-img">
                                <img src="{{ asset('public/storage/blog/' . $blog->image) }}" alt="Image">
                            </div>
                            <div class="blog-card-info">
                                <a href="{{route('blog.detail', $blog->slug)}}" class="blog-date"><i class="flaticon-calendar"></i>{{ $blog->created_at->format('d M Y') }}</a>
                                <h3><a href="{{route('blog.detail', $blog->slug)}}">{{ $blog->title }}</a></h3>
                                <a href="{{route('blog.detail', $blog->slug)}}" class="link-one">Read More...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog Details End -->
@endsection
