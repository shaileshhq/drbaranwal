@extends('frontend.layout.app')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-10">
        <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp') }}" alt="Image"
            class="br-shape-one bounce sm-none">
        <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp') }}" alt="Image"
            class="br-shape-two moveHorizontal sm-none">
        <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp') }}" alt="Image"
            class="br-shape-three">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Service Details</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('service')}}">Service</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Service Details Section Start -->
    <div class="blog-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-5">
                  <div class="col-lg-5">
                        <div class="single-img">
                            <img src="{{ asset('public/storage/service/' . $service_detail->image) }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h1>{{ $service_detail->title }}</h1>
                        <button href="#" class="btn btn-date"><i class="flaticon-calendar"></i> {{ $service_detail->created_at->format('d M Y') }}</button>
                        <div class="single-para">
                            <p>{!! $service_detail->short_desc !!}</p>
                        </div>
                    </div>
                {{-- <div class="col-xl-10 offset-xl-1">
                    <article>
                        <h1>{{ $service_detail->title }}</h1>
                        <div class="single-img mt-30">
                            <img src="{{ asset('public/storage/service/' . $service_detail->image) }}" alt="Image">
                            <a href="#" class="blog-date"><i
                                    class="flaticon-calendar"></i>{{ $service_detail->created_at->format('d M Y') }}</a>
                        </div>
                        <div class="single-para">
                            <p>{!! $service_detail->short_desc !!}</p>
                        </div>
                    </article>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service Details End -->
    <!-- Contact Us section Start -->
    <section class="contact-us-wrap ptb-100 pt-0">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="section-title style-one text-center mb-40">
                      {{-- <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Enquiry</span> --}}
                      <h2>We will get in touch with you <span>shortly .</span></h2>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="about-img-wrap">
                       <img src="{{ asset('public/frontend_css/assets/img/about/about-img-2.webp')}}" alt="Image" class="about-img-one">
                    </div>
              </div>
              <div class="col-xl-6">
                      @if ($message = Session::get('success'))
                              <div class="alert alert-success">
                              <strong>Success!</strong> {{ $message }}
                              </div>
                      @endif
                  <div class="contact-form">
                      <form class="form-wrap contactForm" action="{{ route('front.service.store', $service_detail->slug) }}" method="POST">
                          @csrf
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" name="name" placeholder="Full Name*">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="number" name="phone" placeholder="Phone Number*" required>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="email" name="email" placeholder="Your Email Address*" required>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" name="purpose" placeholder="Purpose" required>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                      <textarea name="message" placeholder="Your Messages.." cols="30" rows="10" required></textarea>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <button type="submit" name="submit" class="btn-two">Submit</button>
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Contact Us section End -->
@endsection
