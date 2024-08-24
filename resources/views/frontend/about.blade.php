@extends('frontend.layout.app')
@section('content')

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-2">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>About us</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.php">Home</a></li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- About Section Start -->
        <div class="about-wrap style-two ptb-100">
            <div class="container">
                <img src="{{ asset('public/frontend_css/assets/img/about/about-shape-3.webp')}}" alt="Image" class="about-shape-one moveHorizontal">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <img src="{{ asset('public/frontend_css/assets/img/about/about-shape-4.webp')}}" alt="Image" class="about-img-shape">
                           <img src="{{ asset('public/frontend_css/assets/img/about/about-img-2.webp')}}" alt="Image" class="about-img-one">
                           <img src="{{ asset('public/frontend_css/assets/img/about/about-img-3.webp')}}" alt="Image" class="about-img-two">
                           <div class="promo-box">
                                <h5>95%</h5>
                                <span>Positive Feedback</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-xxl-0">
                        <div class="about-content about-list">
                            <div class="content-title style-one">
                                <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image"> About Us</span>
                                <h2>The India's Best Dental Clinic That You Can Trust</h2>
                                <p>Welcome to our dental clinic, where your smile is our top priority. With a team of experienced and compassionate dental professionals, we are dedicated to providing comprehensive dental care in a comfortable and friendly environment.</p>
                            </div>
                            <div class="feature-item">
                                <span><img src="{{ asset('public/frontend_css/assets/img/about/like.svg')}}" alt="Image"></span>
                                <h6>Maintains a Highly Trained, Qualified and Experienced Dentists.</h6>
                            </div>
                            <ul class="feature-list list-style">
                                <li>Award Winning</li>
                                <li>24/7 Opened</li>
                                <li>Professional Staff</li>
                                <li>Fair Prices</li>
                            </ul>
                            <a href="{{route('index')}}#appointment" class="btn-two">Make an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Counter Section start -->
         <div class="counter-wrap style-one pt-100 pb-75">
            <img src="{{ asset('public/frontend_css/assets/img/counter-shape.webp')}}" alt="Image" class="counter-shape">
            <div class="container">
                <div class="counter-card-wrap">
                    <div class="counter-card">
                        <span class="counter-icon">
                            <i class="flaticon-stethoscope"></i>
                        </span>
                        <div class="counter-text">
                            <span class="counter">10</span><small class="plus">+</small>
                            <p>Dedicated Doctors</p>
                        </div>
                    </div>
                    <div class="counter-card">
                        <span class="counter-icon">
                            <i class="flaticon-hospital"></i>
                        </span>
                        <div class="counter-text">
                           <span class="counter">15</span><small class="plus">+</small>
                            <p>Clinic Rooms</p>
                        </div>
                    </div>
                    <div class="counter-card">
                        <span class="counter-icon">
                            <i class="flaticon-medal"></i>
                        </span>
                        <div class="counter-text">
                            <span class="counter">5</span><small class="plus">+</small>
                            <p>Awards</p>
                        </div>
                    </div>
                    <div class="counter-card">
                        <span class="counter-icon">
                            <i class="flaticon-customer"></i>
                        </span>
                        <div class="counter-text">
                            <span class="counter">1500 </span><small class="plus">+</small>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->
        <div class="team-details-wrap ptb-100" style="background: #bdfbf238;">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-xl-4 order-xl-1 order-lg-2 order-md-2 order-2">
                        <div class="sidebar">
                            <div class="sidebar-widget style-two">
                                <div class="single-team-widget">
                                    <img src="{{ asset('public/frontend_css/assets/img/team/profile.jpeg')}}" alt="Image">
                                    <div class="single-team-info">
                                        <h3>Dr. A.K Baranwal</h3>
                                        <span>B.DS, M.D.S.(Gold Medalist)</span>
                                        <p>Senior Consultant Endodontist Cosmetic Dental Surgeon & Certifed Implantologist Former Sr. Resident (IMS, BHU) Former SRF (P), DRDO (DEFENCE) </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 order-xl-2 order-lg-1 order-md-1 order-1">
                        <div class="team-desc">
                            <div class="single-para">
                                <h2>Meet Our Certified & Experienced Dentist</h2>
                                <p>We are proud to introduce Dr. AK Baranwal, our senior consultant specializing in endodontics, cosmetic dentistry, and dental implants. With a distinguished background including roles as Senior Resident at IMS, BHU. Dr. Baranwal brings extensive expertise to our practice. His dedication to precision and patient care ensures that every individual receives comprehensive and compassionate dental treatment.</p>
                                <a href="{{route('index')}}#appointment" class="btn-two">Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Team -->
        {{-- <div class="cta-team-wrap ptb-100">
            <div class="team-wrap">
                <div class="container">
                    <div class="row mb-40">
                        <div class="col-xxl-6 col-xl-8 col-lg-7 col-md-8">
                            <div class="section-title style-one">
                                <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image"> Professional Dentist</span>
                                <h2>Super Specialist doctor</h2>
                            </div>
                        </div>
                        <div class="team-slider-btn slider-btn">
                            <div class="team-prev prev-btn" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b182210bf063fb810" aria-disabled="false"><img src="{{ asset('public/frontend_css/assets/img/left-arrow.svg')}}" alt="Image"></div>
                            <div class="team-next next-btn swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b182210bf063fb810" aria-disabled="true"><img src="{{ asset('public/frontend_css/assets/img/right-arrow.svg')}}" alt="Image"></div>
                        </div>
                    </div>
                    <div class="team-card-wrap">
                        <div class="team-slider swiper">
                            <div class="swiper-wrapper">
                                @foreach($teams as $team)
                                <div class="swiper-slide">
                                    <div class="team-card style-two">
                                        <div class="team-img">
                                            <img src="{{asset('public/storage/team/' .$team->image)}}" alt="Image">
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
        </div> --}}
         <!-- End Team -->
         <!-- Testimonial Section Start -->
        <div class="testimonial-wrap style-one ptb-100">
            <img src="{{ asset('public/frontend_css/assets/img/shape-2.webp')}}" alt="Image" class="testimonial-shape-one moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/bg-shape-1.webp')}}" alt="Image" class="testimonial-bg-shape">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-xxl-6 col-xl-7 col-md-9">
                        <div class="section-title style-one">
                            <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Patients Review</span>
                            <h2>Valuable Feedback From Our <span>Patients</span></h2>
                        </div>
                    </div>
                    <div class="testimonial-slider-btn slider-btn">
                        <div class="testimonial-prev prev-btn"><img src="{{ asset('public/frontend_css/assets/img/left-arrow.svg')}}" alt="Image"></div>
                        <div class="testimonial-next next-btn"><img src="{{ asset('public/frontend_css/assets/img/right-arrow.svg')}}" alt="Image"></div>
                    </div>
                </div>
                <div class="testimonial-slider-one swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card style-one">
                                <div class="client-quote">
                                    <img src="{{ asset('public/frontend_css/assets/img/clients/quote-2.svg')}}" alt="Image" class="quote-icon">
                                    <p>Dr A.K Baranwal provided exceptional braces treatment.clear explanation minimal discomfort and effective results within the estimated time. proffesional staff and excellent post treatment care. worthwhile investment for a confident smile, highly.</p>
                                </div>
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="{{ asset('public/frontend_css/assets/img/user-2.png')}}" alt="Image">
                                    </div>
                                    <h5>Anjana Singh</h5>
                                    <span>Varanasi</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card style-one">
                                <div class="client-quote">
                                    <img src="{{ asset('public/frontend_css/assets/img/clients/quote-2.svg')}}" alt="Image" class="quote-icon">
                                    <p>I have been a patient at this clinic for several years, and I can't speak highly enough of
                                        the exceptional care I've received. The expertise in endodontics and cosmetic dentistry is
                                        truly unmatched. The entire staff is professional, compassionate, and always attentive to my
                                        needs.</p>
                                </div>
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="{{ asset('public/frontend_css/assets/img/user.png')}}" alt="Image">
                                    </div>
                                    <h5>Rajat Singh</h5>
                                    <span>Varanasi</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card style-one">
                                <div class="client-quote">
                                    <img src="{{ asset('public/frontend_css/assets/img/clients/quote-2.svg')}}" alt="Image" class="quote-icon">
                                    <p>Dr A.K Baranwal and his staff are excellent. They are professional and they take the time to explain everything to us.he is very polite,caring and supportive with everyone.</p>
                                </div>
                                <div class="client-info">
                                    <div class="client-img">
                                        <img src="{{ asset('public/frontend_css/assets/img/user-2.png')}}" alt="Image">
                                    </div>
                                    <h5>Ayushi Patel</h5>
                                    <span>Varanasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->
@endsection
