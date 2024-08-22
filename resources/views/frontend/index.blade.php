@extends('frontend.layout.app')
@section('content')

        <!-- Hero Section Start -->
        <div class="hero-wrap style-one">
            <img src="{{ asset('public/frontend_css/assets/img/hero/hero-shape-1.webp')}}" alt="Image" class="hero-shape-one">
            <img src="{{ asset('public/frontend_css/assets/img/hero/hero-shape-2.webp')}}" alt="Image" class="hero-shape-two">
            <img src="{{ asset('public/frontend_css/assets/img/hero/hero-shape-3.webp')}}" alt="Image" class="hero-shape-three moveHorizontal md-none">
            <img src="{{ asset('public/frontend_css/assets/img/hero/hero-shape-4.webp')}}" alt="Image" class="hero-shape-four bounce md-none">
            <img src="{{ asset('public/frontend_css/assets/img/hero/hero-shape-5.webp')}}" alt="Image" class="hero-shape-five">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-xl-7 col-lg-6">
                        <div class="hero-content">
                            <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Dental Care For Everyone</span>
                            <h1>Dr A K Baranwal <br><span> BDS, MDS (Gold medalist)!</span></h1>
                          <p>Discover the path to your perfect smile with the premier dental experts at Dr A.K Baranwal Dentistry. Our skilled team is dedicated to delivering exceptional results and personalized care, ensuring your journey to a radiant smile.</p>
                          <a href="#appointment" class="btn-two">Make An Appointment</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero-img-wrap">
                            <div class="hero-promo-box">
                                <span><img src="{{ asset('public/frontend_css/assets/img/hero/promo-img.webp')}}" alt="Image"></span>
                                <div class="hero-promo-text">
                                    <h5>Professional Clinic</h5>
                                    <div class="ratings">
                                        <i class="ri-star-fill"></i><span>4.9</span>( 7.8k Review)
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('public/frontend_css/assets/img/hero/drbaranwal.png')}}" alt="Image" class="hero-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section End -->

        <!-- Feature Section Start -->
        <div class="container pt-100 pb-70">
            <div class="row justify-content-center feature-card-wrap">
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                    <div class="feature-card">
                        <span><i class="flaticon-dental-care"></i></span>
                        <h3>Certified Dentist</h3>
                        <p>One-stop solution for dental problems with complete patient satisfaction.</p> <br>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                    <div class="feature-card">
                        <span><i class="flaticon-dental-care-1"></i></span>
                        <h3>New Technology</h3>
                        <p>Automatic Dental Chairs, high-end Type B AutoClave etc, we have the best equipment at hand.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                    <div class="feature-card">
                        <span><i class="flaticon-tooth-5"></i></span>
                        <h3>Achievement</h3>
                        <p>Panel of doctors include experts and Gold Medalists in their respective fields.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->

        <!-- About Section Start -->
        <div class="feature-wrap mt-0">
            <img src="{{ asset('public/frontend_css/assets/img/about/about-shape-6.webp')}}" alt="Image" class="feature-shape">
            <div class="about-wrap style-three pb-100">
                <div class="container">
                    <img src="{{ asset('public/frontend_css/assets/img/about/about-shape-3.webp')}}" alt="Image" class="about-shape-one moveHorizontal">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img-wrap">
                                <img src="{{ asset('public/frontend_css/assets/img/about/about-img-5.webp')}}" alt="Image" class="about-img-one">
                                <img src="{{ asset('public/frontend_css/assets/img/about/about-img-4.webp')}}" alt="Image" class="about-img-two">
                                <div class="promo-box">
                                    <h5>95%</h5>
                                    <span>Positive Feedback</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pe-xxl-0">
                            <div class="about-content">
                                <div class="content-title style-one">
                                    <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">About Us</span>
                                    <h2>The India's Best Dental Clinic That You Can Trust</h2>
                                    <p>Welcome to our dental clinic, where your smile is our top priority. With a team of experienced and compassionate dental professionals, we are dedicated to providing comprehensive dental care in a comfortable and friendly environment.</p>
                                </div>
                                <div class="feature-list">
                                    <div class="feature-item">
                                        <h6>Our Mission</h6> 
                                        <p>We are committed to the provision of excellent family dental care in a warm environment with a friendly and supportive team.</p>
                                    </div>
                                    <div class="feature-item">
                                        <h6>Our Values</h6> 
                                        <p>Our core values and the other is the commitments we live by. We welcome you to give us feedback on how well we do and honor both.</p>
                                    </div>
                                </div>
                                <a href="#appointment" class="btn-two">Make An Appointment<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Service Section Start -->
        <div class="service-wrap style-two bg_optional ptb-100">
            <div class="container">
                <img src="{{ asset('public/frontend_css/assets/img/services/service-shape-1.webp')}}" alt="Image" class="service-shape moveHorizontal">
                <img src="{{ asset('public/frontend_css/assets/img/services/service-shape-3.webp')}}" alt="Image" class="service-shape-two bounce">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="content-title style-one text-center mb-40">
                            <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Dental Care Services</span>
                            <h2>We Provide Different Type Of Dental Care <span>Services</span></h2>
                        </div>
                    </div>
                </div>
                <div class="service-slider-wrap">
                    <div class="service-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-card style-two">
                                    <span class="service-icon">
                                        <i class="flaticon-tooth-4"></i>
                                    </span>
                                    <span class="service-count">01</span>
                                    <h3><a href="#">Dental Implants</a></h3>
                                    <p>Restore the function and aesthetics of your smile with our implant solutions.</p><br>
                                    {{-- <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a> --}}
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-card style-two">
                                    <span class="service-icon">
                                        <i class="flaticon-tooth-3"></i>
                                    </span>
                                    <span class="service-count">02</span>
                                    <h3><a href="#">Restorative Dentistry</a></h3>
                                <p>Repair and preserve damaged teeth with our restorative treatments.</p><br>
                                    {{-- <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a> --}}
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-card style-two">
                                    <span class="service-icon">
                                        <i class="flaticon-tooth-1"></i>
                                    </span>
                                    <span class="service-count">03</span>
                                    <h3><a href="#">Cosmetic Dentistry</a></h3>
                                    <p>Achieve the smile you've always wanted with our cosmetic dental procedures.</p><br>
                                    {{-- <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a> --}}
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-card style-two">
                                    <span class="service-icon">
                                        <i class="flaticon-tooth-2"></i>
                                    </span>
                                    <span class="service-count">04</span>
                                    <h3><a href="#">Root Canal Treatment</a></h3>
                                    <p>Relieve pain and save your natural tooth with our advanced root canal therapy.</p>
                                    {{-- <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-slider-btn slider-btn">
                        <div class="service-prev prev-btn"><img src="{{ asset('public/frontend_css/assets/img/left-arrow.svg')}}" alt="Image"></div>
                        <div class="service-next next-btn"><img src="{{ asset('public/frontend_css/assets/img/right-arrow.svg')}}" alt="Image"></div>
                    </div>
                </div>
                <p class="section-subtitle style-two mt-50 d-block w-100 text-center">Click any of the above services to learn more <a href="{{route('service')}}" class="link-one">View Our All Services</a></p>
            </div>
        </div>
        <!-- Service Section End -->

        <!-- Why Choose Us Section Start -->
        <div class="wh-wrap style-one ptb-100">
            <div class="container">
                <img src="{{ asset('public/frontend_css/assets/img/about/wh-shape-3.webp')}}" alt="Image" class="wh-shape-one">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="wh-content">
                            <div class="content-title style-one">
                                <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Why Choose Us</span>
                                <h2>Why Choose <span>"Dr A K Baranwal" </span>
                                For All Dental Treatment in Varanasi.</h2>
                                <p>At Dr A K Baranwal, we take pride in providing our customers with satisfactory treatments for all their dental problems. Our dental clinics in Varanasi are equipped with advanced technology and modern equipment, making us one of the best dental hospitals in Varanasi. We have a team of the best dentists in Varanasi, holding years of experience in a wide range of dental treatments in Delhi such as microscopic dentistry, orthodontic treatments, periodontics, pediatric dentistry, and many others at a cost that suits your budget. Your safety is our priority, and we follow a strict protocol for the sanitization of all our equipment after every patient’s consultation or treatment session.</p>
                            </div>
                            <ul class="feature-list list-style"></ul>
                            <a href="tel:8318097225" class="btn-two"><i class="flaticon-phone-call"></i>+91-8318097225</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wh-img-wrap">
                            <div class="wh-img">
                                <img src="{{ asset('public/frontend_css/assets/img/about/wh-img-1.webp')}}" alt="Image">
                            </div>
                            <div class="circle-wrap">
                               <i class="flaticon-tooth-2"></i>
                                <div class="circle-text">
                                    <svg class="rotate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                        <defs>
                                            <path id="circlePath_one" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                        </defs>
                                        <circle cx="150" cy="150" r="75" fill="none"/>
                                        <g>
                                            <use xlink:href="#circlePath_one" fill="none"/>
                                            <text fill="#000A2D">
                                                <textPath xlink:href="#circlePath_one">BEST DENTAL CAREWORLD</textPath>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us Section End -->

        <!-- Appointment Section Start -->
        <div class="appointment-wrap style-one pt-100" id="appointment">
            <div class="appointment-bg bg-f"></div>
            <div class="container">
                <div class="appointment-box">
                    <img src="{{ asset('public/frontend_css/assets/img/shape-3.webp')}}" alt="Image" class="box-shape">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="appointment-form">
                                <h3>Make An <span>Appointment.</span></h3>
                                <form action="{{route('front.appointment.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name*</label>   
                                                <input type="text" id="name" placeholder="Name" name="name">
                                                <i class="flaticon-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="app_email">Email*</label>   
                                                <input type="email" id="app_email" placeholder="Email" name="email">
                                                <i class="flaticon-mail"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="app_phone">Phone*</label>   
                                                <input type="number" id="app_phone" placeholder="Phone" name="phone">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="app_date">Select Date*</label>   
                                                <input type="date" id="app_date" name="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="app_time">Select Time*</label>   
                                                <select id="app_time" name="time">
                                                    <option value="">--Select Time--</option>
                                                    <option value="1">9:00 Am - 10:00 Am</option>
                                                    <option value="2">10:00 Am - 11:00 Am</option>
                                                    <option value="3">11:00 Am - 12:00 Pm</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn-two border-0" type="submit">Make an Appointment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="before-after-container">
                                <figure>
                                    <div id="before_after"></div>
                                </figure>
                                <input oninput="callBeforeAfter()" onchange="callBeforeAfter()" type="range" min="0" max="100" value="50" id="before_after_slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ptb-100">
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
        <!-- Appointment Section End -->

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
                    @foreach($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-card style-one">
                            <img src="{{ asset('public/frontend_css/assets/img/team/team-1.webp')}}" alt="Image">
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
        <!-- Team Section End -->

        <!-- CTA Section Start -->
        <div class="cta-wrap style-one">
            <img src="{{ asset('public/frontend_css/assets/img/cta-shape.webp')}}" alt="Image" class="cta-shape">
            <div class="container text-center">
                <h4>Have Any Questions Feel Free to Contact with Our Team</h4>
                <a class="cta-contact" href="tel:+91-8318097225">+91-8318097225</a>
                <a href="{{route('contact')}}" class="btn-two">Contact Us</a>
            </div>
        </div>
        <!-- CTA Section End -->

        <!-- Testimonial Section Start -->
        <div class="testimonial-wrap style-one pt-100 pb-75">
            <img src="{{ asset('public/frontend_css/assets/img/bg-shape-1.webp')}}" alt="Image" class="testimonial-bg-shape">
            <div class="container">
                <div class="row mb-40">
                    <div class="col-xxl-6 col-xl-8 col-lg-7 col-md-8">
                        <div class="section-title style-one ">
                            <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image"> Patients Review</span>
                            <h2>Valuable Feedback From Our <span>Patients</span></h2>
                        </div>
                    </div>
                    <div class="testimonial-slider-btn slider-btn">
                        <div class="testimonial-prev prev-btn"><img src="{{ asset('public/frontend_css/assets/img/left-arrow.svg')}}" alt="Image"></div>
                        <div class="testimonial-next next-btn"><img src="{{ asset('public/frontend_css/assets/img/right-arrow.svg')}}" alt="Image"></div>
                    </div>
                </div>
                <div class="testimonial-slider-wrap style-two">
                    <div class="testimonial-slider-two swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card style-two">
                                    <ul class="rating list-style">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                    </ul>
                                    <div class="client-info-wrap">
                                        <div class="client-img">
                                            <img src="{{ asset('public/frontend_css/assets/img/user-2.png')}}" alt="Image">
                                        </div>
                                        <div class="client-info">
                                            <h5>Anjana Singh</h5>
                                            <span>Varanasi</span>
                                        </div>
                                    </div>
                                    <div class="client-quote">
                                        <span class="quote-icon">
                                            <i class="flaticon-quote"></i>
                                        </span>
                                        <p>Dr A.K Baranwal provided exceptional braces treatment.clear explanation minimal discomfort and effective results within the estimated time. proffesional staff and excellent post treatment care. worthwhile investment for a confident smile, highly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style-two">
                                    <ul class="rating list-style">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                    </ul>
                                    <div class="client-info-wrap">
                                        <div class="client-img">
                                            <img src="{{ asset('public/frontend_css/assets/img/user.png')}}" alt="Image">
                                        </div>
                                        <div class="client-info">
                                            <h5>Rajat Singh</h5>
                                            <span>Varanasi</span>
                                        </div>
                                    </div>
                                    <div class="client-quote">
                                        <span class="quote-icon">
                                            <i class="flaticon-quote"></i>
                                        </span>
                                        <p>I have been a patient at this clinic for several years, and I can't speak highly enough of
                                        the exceptional care I've received. The expertise in endodontics and cosmetic dentistry is
                                        truly unmatched. The entire staff is professional, compassionate, and always attentive to my
                                        needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style-two">
                                    <ul class="rating list-style">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                    </ul>
                                    <div class="client-info-wrap">
                                        <div class="client-img">
                                            <img src="{{ asset('public/frontend_css/assets/img/user-2.png')}}" alt="Image">
                                        </div>
                                        <div class="client-info">
                                            <h5>Ayushi Patel</h5>
                                            <span>Varanasi</span>
                                        </div>
                                    </div>
                                    <div class="client-quote">
                                        <span class="quote-icon">
                                            <i class="flaticon-quote"></i>
                                        </span>
                                        <p>Dr A.K Baranwal and his staff are excellent. They are professional and they take the time to explain everything to us.he is very polite,caring and supportive with everyone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        <div class="blog-wrap style-one pt-100 pb-75 bg_optional">
            <div class="container">
                <img src="{{ asset('public/frontend_css/assets/img/blog/blog-shape-1.webp')}}" alt="Image" class="blog-shape sm-none bounce">
                <div class="row">
                    <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="section-title style-one text-center mb-40">
                            <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Our Latest Articles</span>
                            <h2>Stay Updated With Our Latest News & Blog <span>Articles.</span></h2>
                        </div>
                    </div>
                </div>
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
        <!-- Blog Section End -->
@endsection
