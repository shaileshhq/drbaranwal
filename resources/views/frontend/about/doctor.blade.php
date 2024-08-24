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
                <h2>Our Doctor</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Our Doctor</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

     <!-- Team Section Start -->
     <div class="team-wrap pt-100 pb-75">
      <div class="container">
          <div class="row align-items-center mb-40">
              <div class="col-xl-12 col-md-12">
                  <div class="section-title style-one text-center">
                      <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Professional Dentists</span>
                      <h2>Dentist For Specialized And Experienced <span>Dentistry</span></h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              @foreach($doctor as $item)
              <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="team-card style-one">
                      <img src="{{asset('public/storage/doctor/' .$item->image)}}" alt="Image">
                      <div class="team-info">
                          <h3><a href="#">{{$item->name}}</a></h3>
                          <span>{{$item->designation}}</span>
                      </div>
                  </div>
              </div>
             @endforeach
          </div>
      </div>
  </div>
  <!-- Team Section End -->
@endsection