@extends('frontend.layout.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-10">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Blog Details</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-wrap ptb-100">
            <div class="container">
                <div class="row gx-5">
                    {{-- <div class="col-xl-10 offset-xl-1">
                        <article>
                            <h1>{{ $blog_detail->title }}</h1>
                            <div class="single-img mt-30">
                                <img src="{{ asset('public/storage/blog/' . $blog_detail->image) }}" alt="Image">
                                <a href="#" class="blog-date"><i class="flaticon-calendar"></i>{{ $blog_detail->created_at->format('d M Y') }}</a>
                            </div>
                            <div class="single-para">
                                <p>{!! $blog_detail->description !!}</p>
                            </div>
                        </article>
                    </div> --}}
                    <div class="col-lg-5">
                        <div class="single-img">
                            <img src="{{ asset('public/storage/blog/' . $blog_detail->image) }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h1>{{ $blog_detail->title }}</h1>
                        <button href="#" class="blog-date btn btn-success"><i class="flaticon-calendar"></i> {{ $blog_detail->created_at->format('d M Y') }}</button>
                        <div class="single-para">
                            <p>{!! $blog_detail->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details End -->
@endsection
