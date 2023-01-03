@extends('layouts.app')

@section('SEO')
    <meta name="description" content=@if(session()->get('locale') == 'en' || session()->get('locale') == null) "The services page can be accessed through the (Services) button at the upper left corner, which will take the website visitors to the services page, where we display our four main services; digital, consultations, creativity and growth studies. Each service has a detailed description of how we consider and perform the services and list of the services in more detail." @elseif(session()->get('locale') == 'ar')  @endif/>
    <meta name="keywords" content="@if(session()->get('locale') == 'en' || session()->get('locale') == null)  @elseif(session()->get('locale') == 'ar')  @endif">
@endsection

@section('content')
<section class='w-full absolute graybg gr1'>

</section>
    <section style='direction:ltr' class='w-full fontBlont servicesHeader'>
        <table class=''>
            <tbody>
                <tr>
                    <td>
                        <img src={{ URL::asset('images/SVG/triangles.svg') }} alt="triangles svg" width="100">
                    </td>
                    <td>
                        <h1 class="heading font-bold">
                            {{ __('messages.Our') }}<br />
                            {{ __('messages.Magical') }}<br />
                            {{ __('messages.Boosts') }}
                        </h1>

                        <h2 class='secondHeading'>
                            {{ __('messages.servicesSecondHeading') }}
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class='headerBottomText pt-8'>
                        <center>
                            <h3>
                                {{-- __('messages.servicesLastHeading') --}}
                            </h3>
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <section style='direction="{{ __('messages.direction') }}"' class='w-full section'>

        <div class="tabs">
            <nav class="tabs__navigation">
                <button class="tabs__btn active" type="button">{{ __('messages.DIGITALMARKETING') }}</button>
                <button class="tabs__btn" type="button">{{ __('messages.GROWTHSTUDIES') }}</button>
                <button class="tabs__btn" type="button">{{ __('messages.CONSULTANCY') }}</button>
                <button class="tabs__btn" type="button">{{ __('messages.INNOVATION') }}</button>
            </nav>

            <div class="tabs__content">
                <div class="tabs__body active">
                    <article id="panel-1" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="txt">

                                                <h2 class='discription'>
                                                    {{ __('messages.DIGITALMARKETING') }}</h2>
                                                <p class="step-description">
                                                    {{ __('messages.DIGITALMARKETING2') }}
                                                </p>

                                                <div class="pt-8 desc">
                                                    <ul>
                                                        <li>{{ __('messages.DigitalIdentity') }}</li>
                                                        <li>{{ __('messages.Digitalmarketingstrategy') }}</li>
                                                        <li>{{ __('messages.Socialmediamarketing') }}</li>
                                                        <li>{{ __('messages.SearchEngineOptimization') }}</li>
                                                        <li>{{ __('messages.Webdesignanddevelopment') }}</li>

                                                    </ul>
                                                </div>

                                            </td>
                                            <td class="img ">

                                                <img class="" src={{ URL::asset('images/1.webp') }}
                                                    alt="Digital Marketing" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="tabs__body">
                    <article style='direction:{{ __('messages.direction') }}' id="panel-2" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="txt">
                                                <div class="">
                                                    <h2 class='discription'>
                                                        {{ __('messages.GROWTHSTUDIES') }}
                                                    </h2>

                                                    <p class="step-description">
                                                        {{ __('messages.GROWTHSTUDIES2') }}
                                                    </p>

                                                    <div class="pt-8 desc">
                                                        <ul>
                                                            <li>{{ __('messages.Growthplanrealization') }}</li>
                                                            <li>{{ __('messages.Marketresearch') }}</li>
                                                            <li>{{ __('messages.Innovation&newproductsdevelopment') }}</li>
                                                            <li>{{ __('messages.Competitionanalysis') }}</li>
                                                            <li>{{ __('messages.Speedtomarket') }}</li>
                                                            <li>{{ __('messages.Demandsurgeresponse') }}</li>
                                                            <li>{{ __('messages.Saleseffectiveness') }}</li>
                                                            <li>{{ __('messages.Supplychainoptimization') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="img">
                                                <div class="">
                                                    <img class="" src={{ URL::asset('images/2.webp') }}
                                                        alt="Growth Studies" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="tabs__body">
                    <article id="panel-3" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="txt">
                                                <div class="">
                                                    <h2 class='discription'>
                                                        {{ __('messages.CONSULTANCY') }}
                                                    </h2>

                                                    <p class="step-description">
                                                        {{ __('messages.CONSULTANCY2') }}
                                                    </p>

                                                    <div class="pt-8 desc">
                                                        <ul>
                                                            <li>{{ __('messages.Digitaltransformation') }}</li>
                                                            <li>{{ __('messages.Marketingstrategyanalysis') }}</li>
                                                            <li>{{ __('messages.Leadershipdevelopment') }}</li>
                                                            <li>{{ __('messages.Culturechange') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="img">
                                                <div class="">
                                                    <img class="" src={{ URL::asset('images/3.webp') }}
                                                        alt="Consultancy" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="tabs__body">
                    <article id="panel-4" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td class="txt">
                                                <div class="">
                                                    <h2 class='discription'>
                                                        {{ __('messages.INNOVATION') }}
                                                    </h2>

                                                    <p class="step-description">
                                                        {{ __('messages.INNOVATION2') }}
                                                    </p>

                                                    <div class="pt-8 desc">
                                                        <ul>
                                                            <li>{{ __('messages.Strategicgrowthinnovation') }}</li>
                                                            <li>{{ __('messages.Art&illustration') }}</li>
                                                            <li>{{ __('messages.Design&brand') }}</li>
                                                            <li>{{ __('messages.BusinessCollateralDesign') }}</li>
                                                            <li>{{ __('messages.IndustrialDesign') }}</li>
                                                            <li>{{ __('messages.Content&copywriting') }}</li>
                                                            <li>{{ __('messages.ContentManagement') }}</li>
                                                            <li>{{ __('messages.Editing&proofreading') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="img">
                                                <div class="">
                                                    <img class="" src={{ URL::asset('images/4.webp') }}
                                                        alt="Innovation & Creativity" />

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>


        {{--
        <section class="services">

            <!-- New Tabs -->

            <div class="tabs bumper">

                <button class="tablinks" data-service="tab1">
                    <p data-title="tab1">{{ __('messages.DIGITALMARKETING') }}</p>
                </button>
                <button class="tablinks" data-service="tab2">
                    <p data-title="tab2">{{ __('messages.GROWTHSTUDIES') }}</p>
                </button>
                <button class="tablinks" data-service="tab3">
                    <p data-title="tab3">{{ __('messages.CONSULTANCY') }}</p>
                </button>
                <button class="tablinks" data-service="tab4">
                    <p data-title="tab4">{{ __('messages.INNOVATION') }}</p>
                </button>

                <div class="wrapper_tabcontent">

                    <div id="tab1" class="tabcontent">
                        <article id="panel-1" class="panel w-full">
                            <div class="container2">
                                <div class="">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="txt">

                                                    <h2 class='discription'>
                                                        {{ __('messages.DIGITALMARKETING') }}</h2>
                                                    <p class="step-description">
                                                        {{ __('messages.DIGITALMARKETING2') }}
                                                    </p>

                                                    <div class="pt-8 desc">
                                                        <p>
                                                            {{ __('messages.DIGITALMARKETING3') }}
                                                        </p>
                                                    </div>

                                                </td>
                                                <td class="img ">

                                                    <img class="" src={{ URL::asset('images/1.webp') }}
                                                        alt="Digital Marketing" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div id="tab2" class="tabcontent">
                        <article style='direction:{{ __('messages.direction') }}' id="panel-2" class="panel w-full">
                            <div class="container2">
                                <div class="">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="txt">
                                                    <div class="">
                                                        <h2 class='discription'>
                                                            {{ __('messages.GROWTHSTUDIES') }}
                                                        </h2>

                                                        <p class="step-description">
                                                            {{ __('messages.GROWTHSTUDIES2') }}
                                                        </p>

                                                        <div class="pt-8 desc">
                                                            <p>
                                                                {{ __('messages.GROWTHSTUDIES3') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="img">
                                                    <div class="">
                                                        <img class="" src={{ URL::asset('images/2.webp') }}
                                                            alt="Growth Studies" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div id="tab3" class="tabcontent">
                        <article id="panel-3" class="panel w-full">
                            <div class="container2">
                                <div class="">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="txt">
                                                    <div class="">
                                                        <h2 class='discription'>
                                                            {{ __('messages.CONSULTANCY') }}
                                                        </h2>

                                                        <p class="step-description">
                                                            {{ __('messages.CONSULTANCY2') }}
                                                        </p>

                                                        <div class="pt-8 desc">
                                                            <p>
                                                                {{ __('messages.CONSULTANCY3') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="img">
                                                    <div class="">
                                                        <img class="" src={{ URL::asset('images/3.webp') }}
                                                            alt="Consultancy" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div id="tab4" class="tabcontent">
                        <article id="panel-4" class="panel w-full">
                            <div class="container2">
                                <div class="">
                                    <table>
                                        <tbody>

                                            <tr>
                                                <td class="txt">
                                                    <div class="">
                                                        <h2 class='discription'>
                                                            {{ __('messages.INNOVATION') }}
                                                        </h2>

                                                        <p class="step-description">
                                                            {{ __('messages.INNOVATION2') }}
                                                        </p>

                                                        <div class="pt-8 desc">
                                                            <p>
                                                                {{ __('messages.INNOVATION3') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="img">
                                                    <div class="">
                                                        <img class="" src={{ URL::asset('images/4.webp') }}
                                                            alt="Innovation & Creativity" />

                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

--}}
        <div class='formobile'>

            <div class="tabPanel-widget">
                <label for="Digital" tabindex="0"></label>
                <input id="Digital" type="radio" name="tabs" checked="true" aria-hidden="true">
                <h2>{{ __('messages.DIGITALMARKETING') }}</h2>
                <div>

                    <article id="panel-1" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="txt">

                                                <h2 class='discription'>
                                                    {{ __('messages.DIGITALMARKETING') }}</h2>
                                                <p class="step-description">
                                                    {{ __('messages.DIGITALMARKETING2') }}
                                                </p>

                                                <div class="pt-8 desc">
                                                    <ul>
                                                        <li>{{ __('messages.DigitalIdentity') }}</li>
                                                        <li>{{ __('messages.Digitalmarketingstrategy') }}</li>
                                                        <li>{{ __('messages.Socialmediamarketing') }}</li>
                                                        <li>{{ __('messages.SearchEngineOptimization') }}</li>
                                                        <li>{{ __('messages.Webdesignanddevelopment') }}</li>

                                                    </ul>
                                                </div>

                                            </td>
                                            <td class="img ">

                                                <img class="" src={{ URL::asset('images/1.webp') }}
                                                    alt="Digital Marketing" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>

                </div>
                <label for="Consultancy" tabindex="0"></label>
                <input id="Consultancy" type="radio" name="tabs" aria-hidden="true">
                <h2>{{ __('messages.GROWTHSTUDIES') }}</h2>
                <div>

                    <article style='direction:{{ __('messages.direction') }}' id="panel-2" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="txt">
                                                <div class="">
                                                    <h2 class='discription'>
                                                        {{ __('messages.GROWTHSTUDIES') }}
                                                    </h2>

                                                    <p class="step-description">
                                                        {{ __('messages.GROWTHSTUDIES2') }}
                                                    </p>

                                                    <div class="pt-8 desc">
                                                        <ul>
                                                            <li>{{ __('messages.Growthplanrealization') }}</li>
                                                            <li>{{ __('messages.Marketresearch') }}</li>
                                                            <li>{{ __('messages.Innovation&newproductsdevelopment') }}</li>
                                                            <li>{{ __('messages.Competitionanalysis') }}</li>
                                                            <li>{{ __('messages.Speedtomarket') }}</li>
                                                            <li>{{ __('messages.Demandsurgeresponse') }}</li>
                                                            <li>{{ __('messages.Saleseffectiveness') }}</li>
                                                            <li>{{ __('messages.Supplychainoptimization') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="img">
                                                <div class="">
                                                    <img class="" src={{ URL::asset('images/2.webp') }}
                                                        alt="Growth Studies" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>

                </div>
                <label for="GrowthStudies" tabindex="0"></label>
                <input id="GrowthStudies" type="radio" name="tabs" aria-hidden="true">
                <h2>{{ __('messages.CONSULTANCY') }}</h2>
                <div>

                    <article id="panel-3" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="txt">
                                                <div class="">
                                                    <h2 class='discription'>
                                                        {{ __('messages.CONSULTANCY') }}
                                                    </h2>

                                                    <p class="step-description">
                                                        {{ __('messages.CONSULTANCY2') }}
                                                    </p>

                                                    <div class="pt-8 desc">
                                                        <ul>
                                                            <li>{{ __('messages.Digitaltransformation') }}</li>
                                                            <li>{{ __('messages.Marketingstrategyanalysis') }}</li>
                                                            <li>{{ __('messages.Leadershipdevelopment') }}</li>
                                                            <li>{{ __('messages.Culturechange') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="img">
                                                <div class="">
                                                    <img class="" src={{ URL::asset('images/3.webp') }}
                                                        alt="Consultancy" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>

                </div>
                <label for="Creativity" tabindex="0"></label>
                <input id="Creativity" type="radio" name="tabs" aria-hidden="true">
                <h2>{{ __('messages.INNOVATION') }}</h2>
                <div>

                    <article id="panel-4" class="panel w-full">
                        <div class="container2">
                            <div class="">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td class="txt">
                                                <div class="">
                                                    <h2 class='discription'>
                                                        {{ __('messages.INNOVATION') }}
                                                    </h2>

                                                    <p class="step-description">
                                                        {{ __('messages.INNOVATION2') }}
                                                    </p>

                                                    <div class="pt-8 desc">
                                                        <ul>
                                                            <li>{{ __('messages.Strategicgrowthinnovation') }}</li>
                                                            <li>{{ __('messages.Art&illustration') }}</li>
                                                            <li>{{ __('messages.Design&brand') }}</li>
                                                            <li>{{ __('messages.BusinessCollateralDesign') }}</li>
                                                            <li>{{ __('messages.IndustrialDesign') }}</li>
                                                            <li>{{ __('messages.Content&copywriting') }}</li>
                                                            <li>{{ __('messages.ContentManagement') }}</li>
                                                            <li>{{ __('messages.Editing&proofreading') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="img">
                                                <div class="">
                                                    <img class="" src={{ URL::asset('images/4.webp') }}
                                                        alt="Innovation & Creativity" />

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </article>

                </div>
            </div>

        </div>

    </section>
    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
        <script>
            /* tabs
                        var tabLinks = document.querySelectorAll(".tablinks");
                        tabLinks[0].classList.add("active");

                        var tabContent = document.querySelectorAll(".tabcontent");
                        tabContent[0].classList.add("active");

                        // Setup
                        tabLinks.forEach(link => {
                            link.addEventListener("click", () => openTabs(link));

                            link.tl = gsap.timeline();
                            link.tl.set(".tabcontent.active", {
                                autoAlpha: 1,
                                x: 0
                            });
                            link.tl.fromTo(
                                ".tabcontent", {
                                    autoAlpha: 0,
                                    x: 500
                                }, {
                                    duration: 1,
                                    autoAlpha: 1,
                                    x: 0,
                                    ease: "power4.out"
                                }
                            );
                        });

                        // The link listener
                        function openTabs(link) {
                            if (!link.classList.contains("active")) {
                                link.tl.play(0);

                                document.querySelector(".tablinks.active").classList.remove("active");
                                document.querySelector(".tabcontent.active").classList.remove("active");

                                document.querySelector("#" + link.dataset.service).classList.add("active");
                                link.classList.add("active");
                            }
                        }*/

            const tabs = document.querySelectorAll('.tabs__btn');
            const tabsContent = document.querySelectorAll('.tabs__body');

            if (tabsContent.length > 0 || tabs.length > 0) {

                function hideTabContent() {
                    tabsContent.forEach(item => {
                        item.classList.remove('active');
                    });

                    tabs.forEach(item => {
                        item.classList.remove('active');
                    });
                }

                function showTabContent(i = 0) {
                    tabsContent[i].classList.add('active');
                    tabs[i].classList.add('active');
                }

                hideTabContent();
                showTabContent();

                tabs.forEach((tab, index) => {
                    tab.addEventListener('click', () => {
                        hideTabContent();
                        showTabContent(index);
                    });
                });
            }
        </script>
    @endpush
@endsection
