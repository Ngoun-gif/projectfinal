<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css2/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css2/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css2/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css2/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css2/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css2/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css2/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css2/style.css') }}" type="text/css">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/extrastyle.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/stylebooking.css') }}" />


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    @include('frontend.layouts.topbar')
    @include('frontend.layouts.navbar')

    @yield('content')


    
    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js2/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js2/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js2/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js2/jquery.nicescroll.min.js"') }}"></script>
    <script src="{{ asset('frontend/js2/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js2/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js2/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js2/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js2/main.js') }}"></script>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/navbar.js') }}"></script>
    <script src="{{ asset('frontend/js/jquerybooking.min.js') }}"></script>

    
    <script>
        $('.form-control').each(function () {
            floatedLabel($(this));
        });

        $('.form-control').on('input', function () {
            floatedLabel($(this));
        });

        function floatedLabel(input) {
            var $field = input.closest('.form-group');
            if (input.val()) {
                $field.addClass('input-not-empty');
            } else {
                $field.removeClass('input-not-empty');
            }
        }
    </script>
</body>

</html>