<!DOCTYPE html>
<html lang="zxx">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/flaticon_dolt.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/swiper.bundle.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/header.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/footer.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{ asset('public/frontend_css/assets/css/dark-theme.css')}}">
        <title>Dr. A.K Baranwals | Aesthetic Dental Clinic</title>
        <link rel="icon" type="image/png" href="{{ asset('public/frontend_css/assets/img/favicon.png')}}">
    </head>
    <body>
        <!--  Preloader Start -->
        <div class="loader-wrapper">
            <div class="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!--  Preloader End -->
    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')

    @stack('scripts')
    @if (websiteSetupValue('contact'))
        <div class="need-help-support">
            <a href="https://wa.me/+91{{ websiteSetupValue('contact') }}" rel="noreferrer" target="_blank"
                class="support">
                <img src="{{ asset('public/frontend_css/assets/img/whatsapp.png')}}" alt="support" />
            </a>
            <div class="toast show" id="toast">
                <div class="toast-body">
                    <span class="text-dark">Need Help?</span>
                    <button type="button" id="hideToast" data-dismiss="toast">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif
    @if(websiteSetupValue('contact'))
    <div class="call-help-support">
        <a href="tel:{{ websiteSetupValue('contact') }}" rel="noreferrer" target="_blank"
            class="support">
            <img src="{{ asset('public/frontend_css/assets/img/phone-call.png')}}" alt="support" />
        </a>
        {{-- <div class="toast show" id="toast">
            <div class="toast-body">
                <span class="text-dark">Need Help?</span>
                <button type="button" id="hideToast" data-dismiss="toast">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div> --}}
    </div>
    @endif

    <!-- Appointment -->
    <div class="modal fade appointmentModal" id="appointment" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="appointmentLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Make An Appointment</h4>
                    <p class="text-info">
                        We provide the most full medical services, so every person could have the<br>
                        oportunity to receive qualitative medical help.
                    </p>
                    <form action="{{ route('front.appointment.store') }}" method="POST" class="appointment-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" name="name"
                                    title="Enter Your Name" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Number" name="phone"
                                    title="Enter Your Phone Number" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" name="email"
                                    title="Enter Your Email" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="date" class="form-control" name="time" min="<?php echo date('Y-m-d'); ?>"
                                    title="Choose Appointment Date" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea class="form-control" rows="3" name="message" placeholder="Your Message" title="Enter Your Message"
                                    required></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="submit-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <!--End Appointment -->

    <!--About Us-->
    <div class="modal fade aboutusModal" id="aboutus" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="aboutusLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="mb-3">About Us</h4>
                    <div class="text-info">
                        {!! websiteSetupValue('aboutUs') !!}
                    </div>
                </div>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <!--End About Us-->

   
    <!-- Back to Top -->
    <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button>

    <!-- Link of JS files -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('public/frontend_css/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('public/frontend_css/assets/js/swiper.bundle.min.js')}}"></script>
    <script src="{{ asset('public/frontend_css/assets/js/aos.js')}}"></script>
    <script src="{{ asset('public/frontend_css/assets/js/fslightbox.js')}}"></script>
    <script src="{{ asset('public/frontend_css/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        $(function() {
            $(document).ready(function() {
                var success_message = "{{ Session::get('success') }}";

                if (success_message != "") {
                    success_sweet_alert(success_message);
                }
            });

            function success_sweet_alert(success_message) {
                Swal.fire({
                    icon: 'success',
                    title: success_message
                });
            }
        });
    </script>
</body>

</html>
