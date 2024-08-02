@extends('frontend.layout.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-2">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-1.webp')}}" alt="Image" class="br-shape-one bounce sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-2.webp')}}" alt="Image" class="br-shape-two moveHorizontal sm-none">
            <img src="{{ asset('public/frontend_css/assets/img/breadcrumb/br-shape-3.webp')}}" alt="Image" class="br-shape-three">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Gallery</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.php">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <section class="ptb-100">
        <div class="container">
            <div class="row">
                <div id="gallery" class="photos-grid-container gallery">
                    @foreach ($gallery_list as $gallery)
                    <div class="img-box">
                        <a href="{{ asset('public/storage/gallery/' . $gallery->image) }}" class="glightbox" data-glightbox="type: image">
                          <img src="{{ asset('public/storage/gallery/' . $gallery->image) }}" class="w-100" />
                       </a>
                    </div>
                    @endforeach
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
