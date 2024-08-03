@extends('frontend.layout.app')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-11">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Contact Us section Start -->
        <section class="contact-us-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row justify-content-center pb-75 mx-xxl-5">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact-card">
                                    <img src="{{ asset('public/frontend_css/assets/img/contact-card-shape.webp')}}" alt="Image" class="contact-shape">
                                    <span class="contact-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Phone Number</h3>
                                        <a href="tel:+91-{{ websiteSetupValue('contact') }}">+91-{{ websiteSetupValue('contact') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact-card">
                                    <img src="{{ asset('public/frontend_css/assets/img/contact-card-shape.webp')}}" alt="Image" class="contact-shape">
                                    <span class="contact-icon">
                                        <i class="flaticon-pin"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Our Location</h3>
                                        <p>{{ websiteSetupValue('address') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact-card">
                                    <img src="{{ asset('public/frontend_css/assets/img/contact-card-shape.webp')}}" alt="Image" class="contact-shape">
                                    <span class="contact-icon">
                                        <i class="flaticon-mail"></i>            
                                    </span>
                                    <div class="contact-info">
                                        <h3>Email Address</h3>
                                        <a href="mailto:{{ websiteSetupValue('email') }}"><span>{{ websiteSetupValue('email') }}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title style-one text-center mb-40">
                            <span><img src="{{ asset('public/frontend_css/assets/img/section-shape.svg')}}" alt="Image">Contact Us</span>
                            <h2>Share Your Message <span>With Us.</span></h2>
                        </div>
                    </div>
                    <div class="col-xl-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28856.452348014736!2d82.96580077096012!3d25.3023042680097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e3206e0b28375%3A0xcae9d908d962a4b9!2sVaranasi%2C%20Uttar%20Pradesh%20221010!5e0!3m2!1sen!2sin!4v1722332044880!5m2!1sen!2sin" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-xl-6">
                            @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                    <strong>Success!</strong> {{ $message }}
                                    </div>
                            @endif
                        <div class="contact-form">
                            <form class="form-wrap contactForm" action="{{ route('front.contact.store') }}" method="POST">
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
