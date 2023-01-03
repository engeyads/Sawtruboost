@extends('layouts.app')

@section('SEO')
    <meta name="description"
        content=@if (session()->get('locale') == 'en' || session()->get('locale') == null) "A page shows a list of people behind sawtru Boost starting from our leadership and executives to the creative minds that are doing all magic. Also we show our board and our contacts and address details." @elseif(session()->get('locale') == 'ar') @endif />
    <meta name="keywords" content="@if (session()->get('locale') == 'en' || session()->get('locale') == null) @elseif(session()->get('locale') == 'ar') @endif">
@endsection

@section('content')
    <section class='w-full gradgraybg pt-14'>
        <div class=" people">
            <div class="pageHeading  ">
                <center>
                    <h1 class='font-bold fontBlont text-xxl'>
                        {{ __('messages.Crew') }}
                    </h1>
                    <h2 class='font-bold fontBlont pt-12 text-xl'>
                        {{ __('messages.Crew2') }}
                    </h2>
                </center>
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
            <center>
                <h1 class='font-bold text-white text-xl fontBlont '>
                    {{ __('messages.Meet_Our_Executives') }}
                </h1>
                <p class='text-white fontBlont'>
                    {{ __('messages.Meet_Our_Executives2') }}
                </p>
            </center>

            <div class="card-container">
                <div class="blog-home5 py-5">
                    <div id='data-wrapper' class="row mt-4">

                    </div>
                    <div class="auto-load text-center">
                        <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="60"
                            viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                            <path fill="#000"
                                d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                    dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom-scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            var ENDPOINT = "{{ url('/') }}";
            var page = 1;
            infinteLoadMore(page);
            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height() - $('footer').height()) {
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


            var isMobile = false; //initiate as false
            // device detection
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
                .test(navigator.userAgent) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
                .test(navigator.userAgent.substr(0, 4))) {
                isMobile = true;
            }

            const logotext = document.querySelector('.logotext');
            const subject = document.querySelector('.subject');
            const logo = document.querySelector('.Logo');
            const btn = document.getElementById('overlay')
            const navbar = document.querySelector('.mainmenu');
            const topmenus = document.querySelector('.topmenu')
            const menu = document.getElementById('toggle')

            //const scrollContainer = document.querySelector("main");
            //const social = document.querySelector('.sticky-icon');

            menu.addEventListener('click', function(e) {
                menu.classList.toggle('active')
                btn.classList.toggle('open');
            }, false)

            function menuColor() {

                if (window.scrollY > 0) {
                    navbar.classList.add('nav-active');
                    $('.mainmenu .links ul li').css('color', 'darkgray');
                    $('.button_container .top').css('background-color', 'darkgray');
                    $('.button_container .middle').css('background-color', 'darkgray');
                    $('.button_container .bottom').css('background-color', 'darkgray');
                }
                if (window.scrollY == 0) {
                    navbar.classList.remove('nav-active');
                    $('.mainmenu .links ul li').css('color', 'white');
                    $('.button_container .top').css('background-color', 'white');
                    $('.button_container .middle').css('background-color', 'white');
                    $('.button_container .bottom').css('background-color', 'white');
                }
            }

            function mouseOver() {
                if (!isMobile) {
                    document.querySelector('.overlay ul li:nth-of-type(4)').style =
                    'transition: all 0.35s ease;margin-top:6rem';
                } else {
                    document.querySelector('.overlay ul li:nth-of-type(4)').style =
                    'transition: all 0.35s ease;margin-top:6rem';
                }
            }

            function mouseOut() {
                if (!isMobile) {
                    document.querySelector('.overlay ul li:nth-of-type(4)').style = 'transition: all 0.35s ease;margin:0';
                } else {
                    document.querySelector('.overlay ul li:nth-of-type(4)').style = 'transition: all 0.35s ease;margin:0';
                }
            }

            topmenus.addEventListener("mouseover", mouseOver);
            topmenus.addEventListener("mouseout", mouseOut);
            menuColor();


            window.onscroll = () => {
                menuColor();
            }
            $('.mainmenu .links ul li').css('color', 'white');
            $('.button_container .top').css('background-color', 'white');
            $('.button_container .middle').css('background-color', 'white');
            $('.button_container .bottom').css('background-color', 'white');
            $('.triangleBlack').css('color', 'white');
            $('.submenu2').css('color', 'darkgray');
        </script>
    @endpush
@endsection
