@extends('layouts.app')

@section('content')
    <section class="about w-full yellowbg">
        <div>
            <center>
                <h1 class='text-xxl font-bold fontBlont'>
                    {{ __('messages.AboutUs') }}
                </h1>
                <h2 class='text-xl font-bold fontBlont'>
                    {{ __('messages.AboutUs2') }}
                </h2>
            </center>

        </div>
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

        <h2 class='text-xl font-bold fontBlont py-4'>
            {{ __('messages.OurStory') }}
        </h2>
        <p>
            {{ __('messages.OurStory2') }}
        </p>
        <br />
        <p>
            {{ __('messages.OurStory3') }}
            ( {{ __('messages.readmore') }} <a
                href={{ URL::asset('files/Sawtruboost_Company_Profile.pdf') }}>{{ __('messages.CompanyProfile') }}</a> )
        </p>

        <h2 class='text-xl font-bold fontBlont py-4'>
            {{ __('messages.WhoWeAre') }}
        </h2>
        <p>

            {{ __('messages.WhoWeAre2') }}
            ( {{ __('messages.Meetour') }} <a href={{ URL::to('team') }}>{{ __('messages.team') }}</a> )
        </p>
        <h2 class='text-xl font-bold fontBlont py-4'>
            {{ __('messages.WhatWeDo') }}
        </h2>
        <p>

            {{ __('messages.WhatWeDo2') }}
            ( {{ __('messages.exploremore') }} <a
                href={{ URL::to('services') }}>{{ __('messages.ourmagicalboosts3') }}</a> )
        </p>


    </section>

    <section class='TrustSection'>
        <div class="px-14">
            <div class="">
                <h1 class='fontBlont font-bold text-custom-gray'>{{ __('messages.TrustedPartners') }}
                </h1>
                <table>
                    <tr class="py-4 ">
                        <td><img src={{ URL::asset('images/google.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/meta.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/microsoft.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/wix.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/wordpress.webp') }} width="160px" alt="" /></td>
                        <td><img src={{ URL::asset('images/shopify.webp') }} width="160px" alt="" /></td>
                    </tr>
                </table>
            </div>
        </div>
        <br />
        <br />
        <br />
        <br />
    </section>

    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
