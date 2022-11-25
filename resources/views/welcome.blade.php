@extends('layouts.app')

@section('content')
    <section class='w-full first customYellowbg' style="direction:ltr">

        <div class='bground'>
            <h2 class="heading">
                {{ __('messages.CompanyWord') }}<br />
                {{ __('messages.CompanyWord2') }}

            </h2>
            <button class='btn' style="direction:{{ __('messages.direction') }}">
                <h1>
                    {{ __('messages.boostnow') }}
                </h1>
            </button>
        </div>
        <div class="bird-container bird-container--one">
            <div class="bird bird--one"></div>
        </div>

        <div class="bird-container bird-container--two">
            <div class="bird bird--two"></div>
        </div>

        <div class="bird-container bird-container--three">
            <div class="bird bird--three"></div>
        </div>

        <div class="bird-container bird-container--four">
            <div class="bird bird--four"></div>
        </div>

        {{-- boosts --}}
        <div class="boost-container boost-container--one">
            <div class="boost boost--one"></div>
        </div>

        <div class="boost-container boost-container--two">
            <div class="boost boost--two"></div>
        </div>

        <div class="boost-container boost-container--three">
            <div class="boost boost--three"></div>
        </div>

        <div class="boost-container boost-container--four">
            <div class="boost boost--four"></div>
        </div>
    </section>

    <section class='w-full second'>
        <div>
            <center>
                <h2 class='socilaword text-xxl font-bold'>{{ __('messages.socialword') }}</h2>
            </center>
        </div>
    </section>

    <section class=" third" style="direction:ltr">
        <section id="panels">

            <div id="panels-container">
                <h2 class="text-xl ml-12 mt-32 w-full font-bold fontBlont text-custom-gray absolute">
                    {{ __('messages.OURMAGICALBOOSTS2') }}
                </h2>
                <article id="panel-1" class="panel w-full">

                    <div class="container1">
                        <div class="">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="txt">

                                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                                    {{ __('messages.DIGITALMARKETING') }}</h2>
                                                <p class="step-description">
                                                    {{ __('messages.DIGITALMARKETING2') }}
                                                </p>

                                                <div class="pt-8">
                                                    <p>
                                                        {{ __('messages.DIGITALMARKETING3') }}
                                                    </p>
                                                </div>

                                        </td>
                                        <td class="img">

                                                <img class="" src={{ URL::asset('images/digital_marketing.webp') }}
                                                    alt="" />


                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
                <article id="panel-2" class="panel w=full">
                    <div class="container1">
                        <div class="">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="txt">
                                            <div class="">
                                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                                    {{ __('messages.GROWTHSTUDIES') }}
                                                </h2>

                                                <p class="step-description">
                                                    {{ __('messages.GROWTHSTUDIES2') }}
                                                </p>

                                                <div class="pt-8">
                                                    <p>
                                                        {{ __('messages.GROWTHSTUDIES3') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="img">
                                            <div class="">
                                                <img class="" src={{ URL::asset('images/growth_studies.webp') }}
                                                    alt="" />

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
                <article id="panel-3" class="panel w=full">
                    <div class="container1">
                        <div class="">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="txt">
                                            <div class="">
                                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                                    {{ __('messages.CONSULTANCY') }}
                                                </h2>

                                                <p class="step-description">
                                                    {{ __('messages.CONSULTANCY2') }}
                                                </p>

                                                <div class="pt-8">
                                                    <p>
                                                        {{ __('messages.CONSULTANCY3') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="img">
                                            <div class="">
                                                <img class="" src={{ URL::asset('images/consultancy.webp') }}
                                                    alt="" />

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
                <article id="panel-4" class="panel w=full">
                    <div class="container1">
                        <div class="">
                            <table>
                                <tbody>

                                    <tr>
                                        <td class="txt">
                                            <div class="">
                                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                                    {{ __('messages.INNOVATION') }}
                                                </h2>

                                                <p class="step-description">
                                                    {{ __('messages.INNOVATION2') }}
                                                </p>
                                                <div class="pt-8">
                                                    <p>
                                                        {{ __('messages.INNOVATION3') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="img">
                                            <div class="">
                                                <img class="" src={{ URL::asset('images/innovation_&_creativity.webp') }}
                                                    alt="" />

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section id="panelsMobile">
            <h2 class="text-xl mt-32 w-full font-bold fontBlont text-custom-gray ">
                {{ __('messages.OURMAGICALBOOSTS2') }}
            </h2>
            <table>
                <tbody>
                    <tr>
                        <td class="">
                            <div class="">
                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                    {{ __('messages.DIGITALMARKETING') }}</h2>

                                <p class="step-description">
                                    {{ __('messages.DIGITALMARKETING2') }}
                                </p>
                            </div>
                        </td>
                        <td class="">
                            <div class="">
                                <img class="" src={{ URL::asset('images/digital_marketing.webp') }} alt="" />

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="">
                            <div class="">
                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                    {{ __('messages.GROWTHSTUDIES') }}
                                </h2>

                                <p class="step-description">
                                    {{ __('messages.GROWTHSTUDIES2') }}
                                </p>
                            </div>
                        </td>
                        <td class="">
                            <div class="">
                                <img class="" src={{ URL::asset('images/growth_studies.webp') }} alt="" />

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="">
                            <div class="">
                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                    {{ __('messages.CONSULTANCY') }}
                                </h2>

                                <p class="step-description">
                                    {{ __('messages.CONSULTANCY2') }}
                                </p>
                            </div>
                        </td>
                        <td class="">
                            <div class="">
                                <img class="" src={{ URL::asset('images/consultancy.webp') }} alt="" />

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="">
                            <div class="">
                                <h2 class='text-xxl fontBlont discription text-custom-gray'>
                                    {{ __('messages.INNOVATION') }}
                                </h2>

                                <p class="step-description">
                                    {{ __('messages.INNOVATION2') }}
                                </p>
                            </div>
                        </td>
                        <td class="">
                            <div class="">
                                <img class="" src={{ URL::asset('images/innovation_&_creativity.webp') }} alt="" />

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


        </section>
    </section>

    <section class='w-full py-20 fourth'>
        <div>
            <center>
                <table>
                    <tr class="py-4 partners">
                        <td><img src={{ URL::asset('images/client1.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/client3.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/client2.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/cybersky.webp') }} width="160px" alt="" /></td>
                    </tr>
                </table>
            </center>
        </div>
    </section>

    <section class='w-full yellowbg fifth'>
        <div class="blog-home5 py-5">

            <div class=" justify-content-center">
                <div class="">
                    <center>
                        <h3 class="mb-2">{{ __('messages.LATESTINSIGHTS') }}</h3>
                    </center>
                    {{-- <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6> --}}
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card b-h-box position-relative font-14 border-0 mb-4">
                        <img class="card-img"
                            src={{ URL::asset('images/top-view-man-doing-online-shopping-his-laptop.webp') }}
                            alt="Card image" />
                        <div class="card-img-overlay overflow-hidden">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Admin</span>
                                <div class="ml-2">
                                    <span class="ml-2">Nov 18, 2022</span>
                                </div>
                            </div>
                            <h5 class="card-title my-3 font-weight-normal">Which strategy is better for your company:
                                In-House versus outsourcing</h5>
                            <p class="card-text">Explore the fundamentals of marketing to identify whether you should
                                hire a professional or handle your own marketing: Do it yourself or buy it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card b-h-box position-relative font-14 border-0 mb-4">
                        <img class="card-img"
                            src={{ URL::asset('images/business-partners-handshake-international-corporate.webp') }}
                            alt="Card image" />
                        <div class="card-img-overlay overflow-hidden">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Admin</span>
                                <div class="ml-2">
                                    <span class="ml-2">Nov 18, 2022</span>
                                </div>
                            </div>
                            <h5 class="card-title my-3 font-weight-normal">Online Consumption: Growing Continually or
                                Just Striking a Plateau?</h5>
                            {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card b-h-box position-relative font-14 border-0 mb-4">
                        <img class="card-img"
                            src={{ URL::asset('images/man-holding-credit-card-hand-entering-security-code-using-laptop-keyboard.webp') }}
                            alt="Card image" />
                        <div class="card-img-overlay overflow-hidden">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity,
                                    Ngo</span>
                                <div class="ml-2">
                                    <span class="ml-2">Feb 18, 2018</span>
                                </div>
                            </div>
                            <h5 class="card-title my-3 font-weight-normal">Help out the people who really need it on
                                time.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom-scripts')
        <script>
            gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

            /* Main navigation */
            let panelsSection = document.querySelector("#panels");
            let panelsContainer = document.querySelector("#panels-container");
            let tween;

            /* Panels */
            const panels = gsap.utils.toArray("#panels-container .panel");
            tween = gsap.to(panels, {
                xPercent: -100 * (panels.length - 1),
                ease: "none",
                scrollTrigger: {
                    trigger: "#panels-container",
                    pin: true,
                    start: "top top",
                    scrub: 1,
                    snap: {
                        snapTo: 1 / (panels.length - 1),
                        inertia: false,
                        duration: {
                            min: 0.1,
                            max: 0.1
                        }
                    },
                    end: () => "+=" + (panelsContainer.offsetWidth - innerWidth)
                }
            });
        </script>
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
