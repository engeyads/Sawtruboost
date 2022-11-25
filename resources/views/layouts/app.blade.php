<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <a rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" href="{{ URL::asset('images/SVG/Logo.svg') }}"  type="image/svg+xml">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body dir="{{ __('messages.direction') }}">

    @include('../components/header')

    <div>
        @yield('content')
    </div>


    @include('../components/footer')



    @include('../components/social')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @stack('custom-scripts')
    <script>
        jQuery(function() {
            var tl1 = new TimelineMax(),
                tl2 = new TimelineMax();
            var el1 = jQuery('#rear'),
                el2 = jQuery('#front');

            function on_el1() {
                tl1.to(el1, 40, {
                    ease: Power0.easeNone,
                    x: -2600,
                    repeat: -1
                });
            }

            function on_el2() {
                tl2.to(el2, 30, {
                    ease: Power0.easeNone,
                    x: -2600,
                    repeat: -1
                });
            }

            function start() {
                on_el1();
                on_el2();
            }
            start();
        });
    </script>
</body>

</html>
