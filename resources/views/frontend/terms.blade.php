@extends('frontend.layout.app')
@section('content')
    <div class="bread-nav">
        <div class="container">
            <h3 class="title">Terms & Condition</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Terms & Condition</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="section-padding2 wow fadeInUp" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h5 class="fw-bold">Terms and <span>Conditions of Use</span></h5>
                </div>
            </div>
            <div class="row mt-3" style="font-size: 14px;">
                <div class="col-lg-12 col-md-12">
                    <h6 class="text-theme">1. Introduction</h6>
                    <p class="mb-3"> Welcome to our app and website providing information about near by shops in various
                        cities. By using our services, you agree to comply with and be bound by the following terms and
                        conditions. Please read them carefully.</p>
                    <h6 class="text-theme mt-3">2. Accuracy of Information</h6>
                    <ul class="list-unstyled mb-3 list-icon">
                        <li><i class="fa fa-angle-right"></i> The information provided in this app and website is for
                            general informational purposes only.</li>
                        <li><i class="fa fa-angle-right"></i> While we strive to provide accurate and up-to-date
                            information, we cannot guarantee the accuracy, completeness, or reliability of the content.
                            Information may be subject to change without notice.</li>
                        <li><i class="fa fa-angle-right"></i> Users are advised to verify the information with the
                            respective near by shops or authorities for accuracy and any updates.</li>
                    </ul>
                    <h6 class="text-theme mt-3"> 3. Manual Verification</h6>
                    <ul class="list-unstyled mb-3 list-icon">
                        <li><i class="fa fa-angle-right"></i> The data presented in this app and website is subject to
                            manual verification.</li>
                        <li><i class="fa fa-angle-right"></i> We rely on various sources to collect and update information,
                            but we cannot guarantee its authenticity or accuracy.</li>
                    </ul>
                    <h6 class="text-theme mt-3">5. Liability</h6>
                    <ul class="list-unstyled mb-3 list-icon">
                        <li> <i class="fa fa-angle-right"></i>We shall not be held responsible for any loss, damage, or
                            inconvenience arising from the use of information provided on this platform.
                        </li>
                        <li> <i class="fa fa-angle-right"></i> Users are encouraged to use their discretion and consult
                            professionals for specific medical advice or services.</li>
                    </ul>
                    <h6 class="text-theme mt-3">6. Changes to Terms and Conditions</h6>
                    <p class="mb-3"> We reserve the right to modify or replace these terms and conditions at any time. Any
                        changes will be effective immediately upon posting.</p>
                    <p>By using this app and website, you acknowledge that you have read and understood these terms and
                        conditions and agree to be bound by them.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
