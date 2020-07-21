
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unicat</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Unicat project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ theme_asset('eclipse/assets/styles/bootstrap4/bootstrap.min.css') }}">
        <link href="{{ theme_asset('eclipse/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ theme_asset('eclipse/assets/plugins/colorbox/colorbox.css" rel="stylesheet') }}" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ theme_asset('eclipse/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ theme_asset('eclipse/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ theme_asset('eclipse/assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ theme_asset('eclipse/assets/styles/main_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ theme_asset('eclipse/assets/styles/responsive.css') }}">
    </head>
    <body>

        <div class="super_container">

            {!! theme_include('eclipse', 'navbar') !!}
            
            @yield('content')

            {!! theme_include('eclipse', 'footer') !!}
            
        </div>

        <script src="{{ theme_asset('eclipse/assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/styles/bootstrap4/popper.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/greensock/TweenMax.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/greensock/TimelineMax.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/greensock/animation.gsap.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/easing/easing.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/plugins/parallax-js-master/parallax.min.js') }}"></script>
        <script src="{{ theme_asset('eclipse/assets/js/custom.js') }}"></script>
    </body>
</html>