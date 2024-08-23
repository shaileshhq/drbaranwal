 <!-- Newsletter Start -->
 <div class="newsletter-wrap style-one">
     <div class="container">
         <div class="newsletter-box ptb-100">
             <img src="{{ asset('public/frontend_css/assets/img/newsletter-shape-1.webp') }}" alt="Image"
                 class="newsletter-shape">
             <div class="row">
                 <div class="col-xl-8 offset-xl-4 col-lg-8 offset-lg-4">
                     <div class="newsletter-content">
                         <div class="content-title style-one">
                             <h3 class="text-white">Our Future Goals<img
                                     src="{{ asset('public/frontend_css/assets/img/section-shape-3.webp') }}"
                                     alt="Image"></h3>
                             <p>As the leading dental clinic in Varanasi, we have constantly attempted to serve our
                                 patients with the best treatment, comfortability, and care that we can provide them.
                                 Our future goals include further evolution in our cutting-edge technology & high end
                                 machines which embarks a new journey for dental innovation in Varanasi. </p>
                         </div>
                     </div>
                 </div>
             </div>
             <img class="newsletter-img" src="{{ asset('public/frontend_css/assets/img/newsletter-img-1.webp') }}"
                 alt="Image">
         </div>
     </div>
 </div>
 <!-- Newsletter End -->
 <footer class="footer-wrap style-one">
     <div class="footer-top pt-100 pb-30">
         @if (websiteSetupValue('logo'))
             <img src="{{ asset('public/frontend_css/assets/img/footer-shape.webp') }}" alt="Image"
                 class="footer-shape">
         @else
             <h3 class="fw-bold">Logo</h3>
         @endif
         <div class="container">
             <div class="row">
                 <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-sm-6">
                     <div class="footer-widget">
                         <h3 class="footer-widget-title">Quick Links</h3>
                         <div class="contact-info">
                             <h6><i class="flaticon-phone-call"></i>Call Us</h6>
                             @if (websiteSetupValue('contact'))
                                 <a
                                     href="tel:+91-{{ websiteSetupValue('contact') }}">+91-{{ websiteSetupValue('contact') }}</a>
                             @endif
                         </div>
                         <div class="contact-info">
                             <h6><i class="flaticon-pin"></i>Contact Address</h6>
                             <p> {{ websiteSetupValue('address') }}</p>
                         </div>
                         <ul class="social-profile list-style">
                             @if (websiteSetupValue('facebook'))
                                 <li><a href="{{ websiteSetupValue('facebook') }}" target="_blank"><i
                                             class="ri-facebook-fill"></i></a></li>
                             @endif
                             @if (websiteSetupValue('twitter'))
                                 <li><a href="{{ websiteSetupValue('twitter') }}" target="_blank"><i
                                             class="ri-twitter-fill"></i></a></li>
                             @endif
                             @if (websiteSetupValue('instagram'))
                                 <li><a href="{{ websiteSetupValue('instagram') }}" target="_blank"><i
                                             class="ri-instagram-line"></i></a></li>
                             @endif
                             @if (websiteSetupValue('linkedin'))
                                 <li><a href="{{ websiteSetupValue('linkedin') }}" target="_blank"><i
                                             class="ri-linkedin-fill"></i></a></li>
                             @endif
                         </ul>
                     </div>
                 </div>
                 <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-12 col-sm-6 pe-xxl-6">
                     <div class="footer-widget">
                         <h3 class="footer-widget-title">Quick Links</h3>
                         <ul class="footer-menu list-style">
                             <li><a href="{{ route('about') }}"><i class="ri-arrow-right-double-line"></i>About Us</a>
                             </li>
                             <li><a href="{{ route('service') }}"><i
                                         class="ri-arrow-right-double-line"></i>Services</a></li>
                             <li><a href="{{ route('gallery') }}"><i class="ri-arrow-right-double-line"></i>Gallery</a>
                             </li>
                             <li><a href="{{ route('blog') }}"><i class="ri-arrow-right-double-line"></i>Blog</a></li>
                             <li><a href="{{ route('contact') }}"><i class="ri-arrow-right-double-line"></i>Contact
                                     Us</a></li>
                             <li><a href="#appointment"><i class="ri-arrow-right-double-line"></i>Make An
                                     Appointment</a></li>
                             {{-- <li><a href="#"><i class="ri-arrow-right-double-line"></i>Faq</a></li>
                            <li><a href="#"><i class="ri-arrow-right-double-line"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="ri-arrow-right-double-line"></i>Terms & Condition</a></li> --}}
                         </ul>
                     </div>
                 </div>
                 <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-12 col-sm-6 px-xxl-0">
                     <div class="footer-widget">
                         <h3 class="footer-widget-title">Clinic Hours</h3>
                         <ul class="opening-time list-style">
                             <li><span>Mon - Thu</span> <span>9:00 AM - 7:00 PM</span></li>
                             <li><span>Friday - </span> <span>9:00 AM - 6:00 PM</span></li>
                             <li><span>Saturday -</span> <span>Closed</span></li>
                             <li><span>Sunday -</span> <span>Closed</span></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <p class="copyright-text">© 2024 All Rights Reserved. Developed By <a href="https://techuptechnologies.com/">
             Techup Technologies.</a></p>
 </footer>
