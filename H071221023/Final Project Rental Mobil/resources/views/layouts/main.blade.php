<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sarfaraz Rent Car | {{ $title }}</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    {{-- landing page  --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/vendor-detail/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/vendor-detail/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/vendor-detail/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/vendor-detail/swiper/swiper-bundle.min.css">


</head>

<body>
    {{-- Directive Blade --}}
    @include('partials.navbar')

    @yield('container')
    {{-- {{ dd($title != 'User Profile') }} --}}
    @if ($title != 'User Profile' && $title != 'User Transaction' && $title != 'User Invoice' && $title != 'Payment')
        @include('partials.footer')
    @endif



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="/assets/vendors/jquery/jquery.min.js"></script>
    <script src="/assets/js/loader.js"></script>
    <script src="/assets/vendors/popper.js/popper.min.js"></script>
    <script src="/assets/vendors/wowjs/wow.min.js"></script>
    <script src="/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/vendors/slick-carousel/slick.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/landing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('script')


    <script>
        new WOW({
            mobile: false
        }).init();
    </script>

</body>

</html>
