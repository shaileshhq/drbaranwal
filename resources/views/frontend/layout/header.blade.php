
     <!-- Start Navbar Area -->
        <div class="navbar-area style-one" id="navbar">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="contact-info list-style">
                                <li><i class="flaticon-mail"></i><a href="mailto:{{ websiteSetupValue('email') }}"><span>{{ websiteSetupValue('email') }}</span></a></li>
                                <li><i class="flaticon-pin"></i>Mahamoorganj, Varanasi(U.P) Pin- 221010</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="contact-info text-lg-end list-style">
                                <li><i class="flaticon-clock"></i>Mon - Sat: 09.00 to 18.00, Sunday: Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('index')}}">
                        @if (websiteSetupValue('logo'))
                        <img class="logo-light" src="{{ asset('public/storage/website_setup/' . websiteSetupValue('logo')) }}" alt="logo">
                        @else
                        <img class="logo-light" src="{{ asset('public/frontend_css/assets/img/logo.png')}}" alt="logo">
                        @endif
                    </a>
                    <div class="other-option d-flex align-items-center justify-content-end d-lg-none">
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                            <span class="burger-menu">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link {{ Route::is('index') ? 'active' : '' }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="dropdown-toggle nav-link" {{ Route::is('about') ? 'active' : '' }}>
                                    About Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('mission')}}" class="nav-link {{ Route::is('mission') ? 'active' : '' }}">Vision - Mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('team')}}" class="nav-link {{ Route::is('team') ? 'active' : '' }}">
                                           Our Team
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link" {{ Route::is('about') ? 'active' : '' }}>About Us</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('gallery') }}" class="nav-link {{ Route::is('gallery') ? 'active' : '' }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Awards
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('award', 'certificate') }}" class="nav-link {{ Route::is('award') ? 'active' : '' }}">Certificate</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('award', 'guest_awards') }}" class="nav-link {{ Route::is('award') ? 'active' : '' }}">
                                            Guest Awards
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('award', 'guest_lecture') }}" class="nav-link {{ Route::is('award') ? 'active' : '' }}">
                                            Guest Lecture
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('service') }}" class="nav-link {{ Route::is('service') || Route::is('service.detail') ? 'active' : '' }}">Dental Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blog') }}" class="nav-link {{ Route::is('blog') || Route::is('blog.detail') ? 'active' : '' }}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact Us</a>
                            </li>
                        </ul>
                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <div class="contact-item">
                                    <i class="flaticon-emergency-call"></i>
                                    <span>Phone Number</span>
                                    <a href="tel:{{ websiteSetupValue('contact') }}">+91-{{ websiteSetupValue('contact') }}</a>
                                </div>
                            </div>
                            <div class="option-item">
                                <a class="sidebar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                                    <i class="flaticon-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="index.php" class="logo d-inline-block">
                    <img class="logo-light" src="{{ asset('public/frontend_css/assets/img/logo.png')}}" alt="logo">
                </a>
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="navbarAccordion">
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="{{ route('index') }}"> Home</a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="{{ route('about') }}">About Us</a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="{{ route('gallery') }}">Gallery</a>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Awards
                        </button>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion30">
                                    <div class="accordion-item">
                                        <a href="{{ route('award', 'certificate') }}" class="accordion-link">
                                            Certificate
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('award', 'guest_awards') }}" class="accordion-link">
                                            Guest Awards
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('award', 'guest_lecture') }}" class="accordion-link">
                                            Guest Lecture
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="#">Award</a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="{{ route('service') }}">Dental Services</a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="{{ route('blog') }}">Blog</a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
                <div class="offcanvas-contact-info">
                    <h4>Contact Info</h4>
                    <ul class="contact-info list-style">
                        <li>
                            <i class="flaticon-pin"></i>
                            <p>{{ websiteSetupValue('address') }}</p>
                        </li>
                        <li>
                            <i class="flaticon-mail"></i>
                            <a href="mailto:{{ websiteSetupValue('email') }}"><span>{{ websiteSetupValue('email') }}</span></a>
                        </li>
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <a href="tel:{{ websiteSetupValue('contact') }}">+91-{{ websiteSetupValue('contact') }}</a>
                        </li>
                    </ul>
                    <ul class="social-profile list-style">
                        <li><a href="https://www.fb.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                        <li><a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    </ul>
                </div>
                <div class="others-option d-lg-none">
                    <div class="contact-item">
                        <i class="flaticon-emergency-call"></i>
                        <span>Phone Number</span>
                        <a href="tel:+91-{{ websiteSetupValue('contact') }}">+91-{{ websiteSetupValue('contact') }}</a>
                    </div>
                </div>
            </div>
        </div>