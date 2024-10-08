@extends('frontend.layout.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
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
                <h2>Gallery</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="gallery-img ptb-100">
        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Clinic</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Cases</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Happy
                            Patient's</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div id="gallery" class="photos-grid-container gallery">
                            @foreach ($clinic_gallery as $gallery)
                                <div class="img-box">
                                    <a href="{{ asset('public/storage/gallery/' . $gallery->image) }}" class="glightbox"
                                        data-glightbox="type: image">
                                        <img src="{{ asset('public/storage/gallery/' . $gallery->image) }}"
                                            class="w-100" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div id="gallery" class="photos-grid-container gallery">
                            @foreach ($case_gallery as $gallery)
                                <div class="img-box">
                                    <a href="{{ asset('public/storage/gallery/' . $gallery->image) }}" class="glightbox"
                                        data-glightbox="type: image">
                                        <img src="{{ asset('public/storage/gallery/' . $gallery->image) }}"
                                            class="w-100" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div id="gallery" class="photos-grid-container gallery">
                            @foreach ($happy_patient_gallery as $gallery)
                                <div class="img-box">
                                    <a href="{{ asset('public/storage/gallery/' . $gallery->image) }}" class="glightbox"
                                        data-glightbox="type: image">
                                        <img src="{{ asset('public/storage/gallery/' . $gallery->image) }}"
                                            class="w-100" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            width: "90vw",
            height: "90vh"
        });
    </script>
@endsection
