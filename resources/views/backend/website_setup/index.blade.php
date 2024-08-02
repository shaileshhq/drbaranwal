@extends('backend.include.app')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dr. A.K Baranwal</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('website_setup.index') }}">
                                <i class="bx bx-home-alt"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Website Setup</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        @if (Session::has('success'))
            <div class="alert border-0 bg-white border-start border-5 border-success alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-success">Success</h6>
                        <div>{{ Session::get('success') }}</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-xl-10">
                        <h3>Website Setup</h3>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="form-body mt-4">
                    <div class="border border-3 p-4 rounded">
                        <form method="post" action="{{ route('website_setup.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input class="form-control" type="file" name="logo" id="logo">
                                    <input type="hidden" name="type[]" value="logo">
                                    <img src="{{ asset('public/storage/website_setup/' . websiteSetupValue('logo')) }}"
                                        alt="Logo" height="50">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="favicon" class="form-label">Favicon</label>
                                    <input class="form-control" type="file" name="favicon" id="favicon">
                                    <input type="hidden" name="type[]" value="favicon">
                                    <img src="{{ asset('public/storage/website_setup/' . websiteSetupValue('favicon')) }}"
                                        alt="Logo" height="50">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="contact" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" name="contact" id="contact"
                                        value="{{ websiteSetupValue('contact') }}" placeholder="Enter contact number">
                                    <input type="hidden" name="type[]" value="contact">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ websiteSetupValue('email') }}" placeholder="Enter email">
                                    <input type="hidden" name="type[]" value="email">

                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" rows="3" name="address">{{ websiteSetupValue('address') }}</textarea>
                                    <input type="hidden" name="type[]" value="address">

                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="footerText" class="form-label">Footer Text</label>
                                    <textarea class="form-control" id="footerText" rows="3" name="footerText">{{ websiteSetupValue('footerText') }}</textarea>
                                    <input type="hidden" name="type[]" value="footerText">

                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="facebook" class="form-label">Facebook Link</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook"
                                        value="{{ websiteSetupValue('facebook') }}" placeholder="Enter facebook link">
                                    <input type="hidden" name="type[]" value="facebook">

                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="instagram" class="form-label">Instagram Link</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram"
                                        value="{{ websiteSetupValue('instagram') }}" placeholder="Enter instagram link">
                                    <input type="hidden" name="type[]" value="instagram">

                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label for="twitter" class="form-label">Twitter Link</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter"
                                        value="{{ websiteSetupValue('twitter') }}" placeholder="Enter twitter link">
                                    <input type="hidden" name="type[]" value="twitter">

                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="aboutUs" class="form-label">About Us</label>
                                    <textarea class="form-control" id="editor" name="aboutUs">{{ websiteSetupValue('aboutUs') }}</textarea>
                                    <input type="hidden" name="type[]" value="aboutUs">

                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary px-5 radius-30">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
