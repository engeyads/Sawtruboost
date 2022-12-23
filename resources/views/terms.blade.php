@extends('layouts.app')

@section('content')
    <section class="about w-full yellowbg">
        <div>
            <center>
                <h1 class='text-xxl font-bold fontBlont'>
                    {{ __('messages.Terms') }}
                </h1>
            </center>

        </div>
    </section>

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



    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
