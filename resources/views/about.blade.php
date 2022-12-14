@extends('layouts.app')

@section('SEO')
    <meta name="description"
        content=@if (session()->get('locale') == 'en' || session()->get('locale') == null) "A subpage contains our profile as a business development and marketing solutions agency based in Istanbul - Turkey - Turkiye and operating in different countries like Saudi Arabia, the United Arab Emirates and other locations. Introducing the business and the team of creatives, experts and executives." @elseif(session()->get('locale') == 'ar') @endif />
    <meta name="keywords" content="@if (session()->get('locale') == 'en' || session()->get('locale') == null) @elseif(session()->get('locale') == 'ar') @endif">
@endsection

@section('content')
    <section class="about w-full yellowbg">
        <center>
            <h1 class='text-xxl font-bold fontBlont'>
                {{ __('messages.AboutUs') }}
            </h1>
        </center>
    </section>
    <div class="sectionImage">

        <img src={{ URL::asset('images/aboutus.webp') }} alt="About Back Ground Image">
        <div class="wrapper invert">
            <span data-text="{{ __('messages.AboutUs') }}"></span>
        </div>
    </div>
    <br>
    <br>
    <br>
    <section class="section w-full">
        <center>
            <div>
                <h2 class='text-xl font-bold fontBlont'>
                    {{ __('messages.AboutUs2') }}
                </h2>
            </div>
            <br><br>
            <h2 class='text-xl font-bold fontBlont py-4'>
                {{ __('messages.OurStory') }}
            </h2>
            <p>
                {{ __('messages.OurStory2') }}
            </p>
            <br />
            <p>
                {{ __('messages.OurStory3') }}
                ( {{ __('messages.readmore') }} <a href="@if(session()->get('locale') == 'en' || session()->get('locale') == null) {{ URL::asset('files/Sawtruboost_Company_Profile.pdf') }} @elseif(session()->get('locale') == 'ar') {{ URL::asset('files/Sawtruboost_Company_ProfileAr.pdf') }} @endif" target="_blank">{{ __('messages.CompanyProfile') }}</a> )
            </p>

            <h2 class='text-xl font-bold fontBlont py-4'>
                {{ __('messages.WhoWeAre') }}
            </h2>
            <p>

                {{ __('messages.WhoWeAre2') }}
                ( {{ __('messages.Meetour') }} <a href={{ URL::to('people') }}>{{ __('messages.team') }}</a> )
            </p>
            <h2 class='text-xl font-bold fontBlont py-4'>
                {{ __('messages.WhatWeDo') }}
            </h2>
            <p>

                {{ __('messages.WhatWeDo2') }}
                ( {{ __('messages.exploremore') }} <a
                    href={{ URL::to('services') }}>{{ __('messages.ourmagicalboosts3') }}</a> )
            </p>

        </center>
    </section>

    <section class='TrustSection'>
    <center>

        <div class="px-14">
            <div class="">
                <h1 class='fontBlont font-bold text-custom-gray'>{{ __('messages.TrustedPartners') }}
                </h1>
                <table>
                    <tr class="py-4 ">
                        <td><img src={{ URL::asset('images/google.webp') }} width="160px" alt="google logo" /></td>
                        <td><img src={{ URL::asset('images/meta.webp') }} width="160px" alt="meta logo" /></td>
                        <td><img src={{ URL::asset('images/microsoft.webp') }} width="160px" alt="microsoft logo" /></td>
                        <td><img src={{ URL::asset('images/wix.webp') }} width="160px" alt="wix logo" /></td>
                        <td><img src={{ URL::asset('images/wordpress.webp') }} width="160px" alt="wordpress logo" /></td>
                        <td><img src={{ URL::asset('images/shopify.webp') }} width="160px" alt="shopify logo" /></td>
                        <td><img src={{ URL::asset('images/sortlist-silver.webp') }} width="160px" alt="sortlist logo" />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </center>

        <br />
        <br />
        <br />
        <br />
    </section>

    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
