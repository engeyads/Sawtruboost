

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
        <div id="mainmenu" class="fixed px-6  z-50 top-0 right-0 mainmenu" /*onScroll={handleScroll}*/>
        <div class="fixed px-6  sm:block">

            <img src={{ asset('assets/logo.svg') }} class='block h-16 w-auto Logo' />
            <img src={{ asset('assets/logotext') }} class="logotext" />
            <div class='subject'></div>

        </div>
        <div class="sm:inline-flex justify-center items-center justify-between justify-items-center">
            <div class="links text-gray-700 dark:text-gray-500">
                <ul class='flex text-xl font-bold'>
                    <li><a href="">Company Profile</a ></li>
                    <li><a href="">Blog</a ></li>
                    <li>
                        <div class='topmenu2'>
                            <span>Services</span><span class='triangleBlack'></span>
                            <div class='submenu2'>
                                <a href='/'>Digital</a >
                                <a href='/'>Consultancy</a >
                                <a href='/'>Growth Studies</a >
                                <a href='/'>Creativity</a >
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
                    <li><a href='/about'>About Us</a ></li>
                    <li><div class='topmenu'><span>Services</span><span class='triangleWhite'></span>
                        <div class='submenu '>
                            <div class="submenuItems flex">
                                <a href='/'>Digital</a >
                                <a href='/'>Consultancy</a >
                                <a href='/'>Growth Studies</a >
                                <a href='/'>Creativity</a >
                            </div>
                        </div>
                    </div>
                    </li>
                    <li><a href="/">Contact Us</a ></li>
                    <li><a href="/">People</a ></li>
                    <li class='extramenu'><a href="/">blog</a ></li>
                    <li class='extramenu'><a href="/">Company Profile</a ></li>
                </ul>
            </nav>
        </div>
    </div>


        <div >
            @yield('content')
        </div>


        <footer class='w-full pt-16 px-16 pb-2  '>

            <div class='w-full '>

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
                                    <Link>Careers</a >
                                </li>
                                <li>
                                    <Link>Partners</a >
                                </li>
                                <li>
                                    <Link>Contact us</a >
                                </li>
                            </ul>
                        </div>
                        <div class="grid__item text-center">
                            <h4 class='text-l font-bold'>
                                Condetions
                            </h4>
                            <ul>
                                <li>
                                    <Link>Terms</a >
                                </li>
                                <li>
                                    <Link>Privacy</a >
                                </li>
                                <li>
                                    <Link>Cookies</a >
                                </li>
                            </ul>
                        </div>
                        <div class="grid__item">
                            <center>
                            <table>
                                <tbody >
                                    <tr >
                                        <td class='text-right'>
                                            Belgium:
                                        </td>
                                        <td class='text-left'>
                                            <Link>+32 537 913 04 51</a >
                                        </td>
                                    </tr>

                                    <tr >
                                        <td class='text-right'>
                                            Saudi Arabia:
                                        </td>
                                        <td class='text-left'>
                                            <Link>+966 537 913 04 51</a >
                                        </td>
                                    </tr>
                                    <tr >
                                        <td class='text-right'>
                                            UAE:
                                        </td>
                                        <td class='text-left'>
                                            <Link>+971 537 913 04 51</a >
                                        </td>
                                    </tr>
                                    <tr >
                                        <td class='text-right'>
                                            Turkiye:
                                        </td>
                                        <td class='text-left'>
                                            <Link>+90 537 913 04 51</a >
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

                                    <td ><Link><img class='inline-flex' width='22px' src={en} alt="" /> En</a ></td>
                                    <td ><Link><img class='inline-flex' width='22px' src={ar} alt="" /> Ar</a ></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class=" px-6 py-4 sm:block footerLogo">
                        <a href="/">
                            <img src={logos} width="200" alt="" />
                        </a >
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


    <div class="sticky-icon {class}">
        <a href="#" class="Tiktok"> {{--Tiktok--}} <i class="fab fa-tiktok"></i></a>
        <a href="https://www.linkedin.com/company/sawtruboost/" class="linkedin"> {{--LinkedIn--}} <i class="fab fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/sawtruboost/" class="Instagram"> {{--Instagram--}} <i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/sawtruboost/" class="Facebook"> {{--Facebook--}} <i class="fab fa-facebook-f"> </i></a>
        <a href="https://twitter.com/sawtruboost" class="Twitter"> {{--Twitter--}} <i class="fab fa-twitter"> </i></a>
        <a href="https://tr.pinterest.com/SAWTRUBOOST/" class="pinterest"> {{--Twitter--}} <i class="fab fa-pinterest"> </i></a>
    </div>

</body>
</html>
