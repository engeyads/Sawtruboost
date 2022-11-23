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


        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="relative items-top justify-center min-h-screen bg-white sm:items-center sm:pt-0 ">
        <div id="mainmenu" class="fixed px-6  z-50 top-0 right-0 mainmenu" /*onScroll={handleScroll}* />
        <div class="fixed px-6  sm:block">

            <img src={{ URL::asset('images/SVG/Logo.svg') }} class='block h-16 w-auto Logo' />
            <img src={{ URL::asset('images/SVG/Logo_Text.svg') }} class="logotext" />
            <div class='subject'></div>

        </div>
        <div class="sm:inline-flex justify-center items-center justify-between justify-items-center">
            <div class="links text-gray-700 dark:text-gray-500">
                <ul class='flex text-xl font-bold'>
                    <li><a href="">Company Profile</a></li>
                    <li><a href="">Blog</a></li>
                    <li>
                        <div class='topmenu2'>
                            <span>Services</span><span class='triangleBlack'></span>
                            <div class='submenu2'>
                                <a href='/'>Digital</a>
                                <a href='/'>Consultancy</a>
                                <a href='/'>Growth Studies</a>
                                <a href='/'>Creativity</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="button_container" id="toggle">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
        </div>
        <div class="overlay customYellowbg" id="overlay">
            <nav class="overlay-menu">
                <ul>
                    <li><a href='/about'>About Us</a></li>
                    <li>
                        <div class='topmenu'><span>Services</span><span class='triangleWhite'></span>
                            <div class='submenu '>
                                <div class="submenuItems flex">
                                    <a href='/'>Digital</a>
                                    <a href='/'>Consultancy</a>
                                    <a href='/'>Growth Studies</a>
                                    <a href='/'>Creativity</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/">Contact Us</a></li>
                    <li><a href="/">People</a></li>
                    <li class='extramenu'><a href="/">blog</a></li>
                    <li class='extramenu'><a href="/">Company Profile</a></li>
                </ul>
            </nav>
        </div>
    </div>


    <div>
        @yield('content')
    </div>



    <footer id="footerAnimation">

        <footer-animation>
            <animation-instance>
                <animation-rear>
                    <svg class="svg" id="rear" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8000 420">
                        <polygon class="m"
                            points="7769.2,126.3 7550.3,93.1 7416.6,128.7 7280.6,152.8 7187.6,92.4 7091.8,114.7 7010.9,80.4 6773.2,144.3 6703.3,143.4 6472.7,88.1 6431.7,105.4 6259.7,130.4 6088,118 5995.3,63.6 5905.4,116.3 5804.5,60.1 5804.5,59.8 5804.2,60 5804,59.8 5804,60.1 5703,116.3 5613.1,63.6 5557,90.7 5348.6,130.4 5176.8,105.4 5135.7,88.1 4835.1,144.3 4597.5,80.4 4496.1,114.7 4420.9,92.4 4327.8,152.8 4191.8,128.7 4000,90 3769.2,126.3 3550.3,93.1 3416.6,128.7 3280.6,152.8 3187.6,92.4 3091.8,114.7 3010.9,80.4 2773.2,144.3 2703.3,143.4 2472.7,88.1 2431.7,105.4 2259.7,130.4 2088,118 1995.3,63.6 1905.4,116.3 1804.5,60.1 1804.5,59.8 1804.2,60 1804,59.8 1804,60.1 1703,116.3 1613.1,63.6 1557,90.7 1348.6,130.4 1176.8,105.4 1135.7,88.1 835.1,144.3 597.5,80.4 496.1,114.7 420.9,92.4 327.8,152.8 191.8,128.7 0,90 0,420 4000,420 8000,420 8000,90 ">
                        </polygon>
                        <polygon class="m_shading" points="485,165.8 496.1,114.7 420.9,92.4"></polygon>
                        <polygon class="m_shading" points="620.5,170.5 661.2,97.5 597.5,80.4"></polygon>
                        <polygon class="m_shading" points="1135.7,88.1 1185.2,175.9 1176.8,105.4"></polygon>
                        <path class="m_shading"
                            d="M1682.4,177.5c0.7-2.7,20.8-61.2,20.8-61.2l-90-52.7C1613.1,63.6,1681.7,180.2,1682.4,177.5z">
                        </path>
                        <polygon class="m_shading" points="1871.4,171.5 1905.4,116.3 1804,60.1"></polygon>
                        <polygon class="m_shading" points="2073.4,150.2 2088,118 1995.3,63.6"></polygon>
                        <polygon class="m_shading" points="2549.4,147.3 2639,127.9 2472.7,88.1"></polygon>
                        <polygon class="m_shading" points="3257.9,160.9 3280.8,152.8 3187.6,92.4"></polygon>
                        <polygon class="m_shading" points="3068.4,128.1 3091.8,114.7 3010.9,80.4"></polygon>
                        <polygon class="m_shading" points="3550.3,93.1 3730.2,145.8 3769.2,126.3"></polygon>
                        <polygon class="m_shading" points="4485,165.8 4496.1,114.7 4420.9,92.4"></polygon>
                        <polygon class="m_shading" points="4620.5,170.5 4661.2,97.5 4597.5,80.4"></polygon>
                        <polygon class="m_shading" points="5135.7,88.1 5185.2,175.9 5176.8,105.4"></polygon>
                        <path class="m_shading"
                            d="M5682.4,177.5c0.7-2.7,20.8-61.2,20.8-61.2l-90-52.7C5613.1,63.6,5681.7,180.2,5682.4,177.5z">
                        </path>
                        <polygon class="m_shading" points="5871.4,171.5 5905.4,116.3 5804,60.1"></polygon>
                        <polygon class="m_shading" points="6073.4,150.2 6088,118 5995.3,63.6"></polygon>
                        <polygon class="m_shading" points="6549.4,147.3 6639,127.9 6472.7,88.1"></polygon>
                        <polygon class="m_shading" points="7257.9,160.9 7280.8,152.8 7187.6,92.4"></polygon>
                        <polygon class="m_shading" points="7068.4,128.1 7091.8,114.7 7010.9,80.4"></polygon>
                        <polygon class="m_shading" points="7550.3,93.1 7730.2,145.8 7769.2,126.3"></polygon>
                    </svg>
                </animation-rear>

                <animation-front>
                    <svg class="svg" id="front" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8000 420">
                        <polygon class="h"
                            points="7907.1,154.8 7815.7,92.1 7508,146.1 7377.2,101.3 7052.3,186.6 6686.9,109.5 6283.1,195.4 5790.6,80 5165.9,165.4 4921.9,109.5 4556.5,186.6 4231.7,101.3 4100.9,146.1 4000,106.6 4000,107.1 3907.1,155.2 3815.7,92.5 3508,146.5 3377.2,101.7 3052.3,187 2686.9,109.9 2283.1,195.8 1790.6,80.4 1165.9,165.8 921.9,109.9 556.5,187 231.7,101.7 100.9,146.5 0,107.1 0,420.4 4000,420 4000,420 8000,419.6 8000,106.6 ">
                        </polygon>
                        <polygon class="h_shading" points="335.2,208.1 557.1,186.6 231.8,101.3 "></polygon>
                        <polygon class="h_shading" points="18.8,183.4 101,146.1 0,106.6 "></polygon>
                        <polygon class="h_shading" points="1060,223.4 1166.1,165.4 921.8,109.5 "></polygon>
                        <polygon class="h_shading" points="1944.3,196.6 2091.6,150.5 1790.6,80 "></polygon>
                        <polygon class="h_shading" points="2916.8,204.7 3052.6,186.6 2686.7,109.5 "></polygon>
                        <polygon class="h_shading" points="3493.3,173.1 3508.1,146.1 3377.1,101.3 "></polygon>
                        <polygon class="h_shading" points="3815.5,92.1 3883.9,184.9 3907,154.8 "></polygon>
                        <polygon class="h_shading" points="4335.2,207.7 4557.1,186.2 4231.8,100.9 "></polygon>
                        <polygon class="h_shading" points="4018.8,183 4101,145.7 4000,106.2 "></polygon>
                        <polygon class="h_shading" points="5060,222.9 5166.1,164.9 4921.8,109 "></polygon>
                        <polygon class="h_shading" points="5944.3,196.2 6091.6,150.1 5790.6,79.6 "></polygon>
                        <polygon class="h_shading" points="6916.8,204.3 7052.6,186.2 6686.7,109 "></polygon>
                        <polygon class="h_shading" points="7493.3,172.7 7508.1,145.7 7377.1,100.9 "></polygon>
                        <polygon class="h_shading" points="7815.5,91.7 7883.9,184.5 7907,154.4 "></polygon>
                    </svg>
                </animation-front>
            </animation-instance>
        </footer-animation>

        <div class='w-full footerContent'>

            <div class='footerTitle'>
                <h2 class='text-xxl font-bold'>Ready To Boost Now?</h2>
                <p>Explore your growth opportunities by contacting one of our ofces whichever way you prefer.</p>

            </div>
            <section>
                <div id="grid1" class="grid1">
                    <div class="grid__item text-center">
                        <h4 class='text-l font-bold'>
                            Contact
                        </h4>
                        <ul class='align-items-center'>
                            <li>
                                <a>Careers</a>
                            </li>
                            <li>
                                <a>Partners</a>
                            </li>
                            <li>
                                <a>Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__item text-center">
                        <h4 class='text-l font-bold'>
                            Condetions
                        </h4>
                        <ul>
                            <li>
                                <a>Terms</a>
                            </li>
                            <li>
                                <a>Privacy</a>
                            </li>
                            <li>
                                <a>Cookies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__item">
                        <center>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class='text-right'>
                                            Belgium:
                                        </td>
                                        <td class='text-left'>
                                            <a>+32 537 913 04 51</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class='text-right'>
                                            Saudi Arabia:
                                        </td>
                                        <td class='text-left'>
                                            <a>+966 537 913 04 51</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='text-right'>
                                            UAE:
                                        </td>
                                        <td class='text-left'>
                                            <a>+971 537 913 04 51</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='text-right'>
                                            Turkiye:
                                        </td>
                                        <td class='text-left'>
                                            <a>+90 537 913 04 51</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>

            </section>

            <div class='copyright'>
                <div class='languages'>

                    <table class="py-4 inline-flex align-right">
                        <tbody>
                            <tr>

                                <td><a><img class='inline-flex' width='22px'
                                            src={{ URL::asset('images/united-kingdom.svg') }} alt="" /> En</a>
                                </td>
                                <td><a><img class='inline-flex' width='22px'
                                            src={{ URL::asset('images/palestine.svg') }} alt="" /> Ar</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class=" px-6 py-4 sm:block footerLogo">
                    <a href="/">
                        <img src={{ URL::asset('images/Blacklogo.svg') }} width="200" alt="" />
                    </a>
                </div>
                <div class='rights'>
                    <center>
                        <p>SAWTRU BOOST ® 2022 All Rights Reserved</p>
                    </center>
                </div>
            </div>
        </div>
    </footer>
    </div>


    <div class="sticky-icon">
        <a href="#" class="Tiktok"> {{-- Tiktok --}} <i class="fab fa-tiktok"></i></a>
        <a href="https://www.linkedin.com/company/sawtruboost/" class="linkedin"> {{-- LinkedIn --}} <i
                class="fab fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/sawtruboost/" class="Instagram"> {{-- Instagram --}} <i
                class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/sawtruboost/" class="Facebook"> {{-- Facebook --}} <i
                class="fab fa-facebook-f"> </i></a>
        <a href="https://twitter.com/sawtruboost" class="Twitter"> {{-- Twitter --}} <i class="fab fa-twitter">
            </i></a>
        <a href="https://tr.pinterest.com/SAWTRUBOOST/" class="pinterest"> {{-- Twitter --}} <i
                class="fab fa-pinterest"> </i></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollToPlugin.min.js"></script>
    @stack('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
