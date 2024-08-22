<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('public/storage/website_setup/' . websiteSetupValue('favicon')) }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend_css/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_css/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('backend_css/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('backend_css/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend_css/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend_css/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend_css/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('backend_css/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend_css/assets/css/icons.css') }}" rel="stylesheet">
    <title>Dr. A.K Baranwal | Varanasi, India | Admin Dashboard</title>
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
</head>


<body>
    <!--wrapper-->
    <div class="wrapper">

        @include('backend.include.sidebar')

        @include('backend.include.header')

        <div class="page-wrapper">
            @yield('content')
        </div>

        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>
    @stack('scripts')
    <!-- Bootstrap JS -->
    <script src="{{ asset('backend_css/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backend_css/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend_css/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend_css/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend_css/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('backend_css/assets/js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.ck_editor').summernote({
                //placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 250,
                toolbar: [
                    ['headings', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'hr', 'video']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']],
                    ['fontsize', ['fontsize']]
                ],
                fontNames: ['Kokila', 'Mangal', 'Noto Sans Devanagari', 'Arial', 'Arial Black',
                    'Comic Sans MS', 'Courier New', 'Merriweather'
                ],
                fontNamesIgnoreCheck: ['Kokila', 'Mangal', 'Noto Sans Devanagari'],
                fontSize: ['8', '10', '12', '14', '18', '24', '36'],
            });
        });
    </script>
</body>

</html>
