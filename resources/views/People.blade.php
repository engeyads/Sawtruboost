@extends('layouts.app')

@section('content')
<section class='w-full gradgraybg pt-14'>


    <div class="w-full people">

        <div class="pageHeading">
            <h1 class='font-bold fontBlont text-xl'>
                {{ __('messages.PEPOLE') }}
            </h1>
            <h2 class='font-bold fontBlont text-xxl'>
                {{ __('messages.We are listeners,') }} <br>
                {{ __('messages.advisors and') }} <br>
                {{ __('messages.changemakers.') }}
            </h2>
        </div>
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
    </div>

    <div class="section w-full peopleContent">
        <h1 class='font-bold fontBlont '>
            {{ __('messages.PEPOLE') }}
        </h1>
        <center>
            <div class="card-container">
                <div class="blog-home5 py-5">
                    <div id='data-wrapper' class="row mt-4">

                    </div>
                    <div class="auto-load text-center">
                        <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                            <path fill="#000"
                                d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                    from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>
                </div>


            </div>
        </center>

    </div>
</section>


    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            var ENDPOINT = "{{ url('/') }}";
            var page = 1;
            infinteLoadMore(page);
            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()-$('footer').height()) {
                    page++;
                    infinteLoadMore(page);
                }
            });

            function infinteLoadMore(page) {
                $.ajax({
                        url: ENDPOINT + "/people?page=" + page,
                        datatype: "html",
                        type: "get",
                        beforeSend: function() {
                            $('.auto-load').show();
                        }
                    })
                    .done(function(response) {
                        if (response.length == 0) {
                            $('.auto-load').html("<p class='p-12'></p>");
                            return;
                        }
                        $('.auto-load').hide();
                        $("#data-wrapper").append(response);
                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError) {
                        console.log('Server error occured');
                    });
            }
        </script>
    @endpush
@endsection
