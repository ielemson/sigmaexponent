@php
    $setting = \App\Models\Setting::find(1);
@endphp
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $setting->website_title }} @yield('title')</title>
        <meta name="description" content="{{ $setting->meta_description }}">
        <meta name="title" content="{{ $setting->meta_title }}">
        <meta name="keywords" content="{{ $setting->meta_tag }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/img/favicon.png") }}">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        
        <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/fontawesome-all.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/flaticon.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/odometer.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/jarallax.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/swiper-bundle.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/slick.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/aos.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/default.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">
       
        
    </head>


    <body>


        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
       @include('includes.banner')
        <!-- header-area-end -->


        <!-- main-area -->
        <main class="fix">

            @yield('content')

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
       @include('includes.footer')
        <!-- footer-area-end -->


        <!-- JS here -->
        <script src="{{ asset("assets/js/vendor/jquery-3.6.0.min.js") }}"></script>
        <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.odometer.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.appear.js") }}"></script>
        <script src="{{ asset("assets/js/gsap.js") }}"></script>
        <script src="{{ asset("assets/js/ScrollTrigger.js") }}"></script>
        <script src="{{ asset("assets/js/SplitText.js") }}"></script>
        <script src="{{ asset("assets/js/gsap-animation.js") }}"></script>
        <script src="{{ asset("assets/js/jarallax.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.parallaxScroll.min.js") }}"></script>
        <script src="{{ asset("assets/js/particles.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.easypiechart.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery.inview.min.js") }}"></script>
        <script src="{{ asset("assets/js/swiper-bundle.min.js") }}"></script>
        <script src="{{ asset("assets/js/slick.min.js") }}"></script>
        <script src="{{ asset("assets/js/ajax-form.js") }}"></script>
        <script src="{{ asset("assets/js/aos.js") }}"></script>
        <script src="{{ asset("assets/js/wow.min.js") }}"></script>
        <script src="{{ asset("assets/js/main.js") }}"></script>
     
       
    </body>

</html>
