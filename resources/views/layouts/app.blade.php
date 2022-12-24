<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('SEO')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <a rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XSWQYV6GBT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-XSWQYV6GBT');
        </script>

        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-N4MVMMS');
        </script>
        <!-- End Google Tag Manager -->

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
    {{ \TawkTo::widgetCode() }}


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4MVMMS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://assets.codepen.io/16327/ScrollTrigger.min.js'></script>
    <!--Start of Tawk.to Script
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6396f7e1b0d6371309d3f9e1/1gk2rgi7u';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script
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

    <!-- Meta Pixel Code
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1638312446679714');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1638312446679714&ev=PageView&noscript=1"
    /></noscript>
     End Meta Pixel Code -->
    @stack('custom-scripts')
    @include('cookie-consent::index')
</body>

</html>
