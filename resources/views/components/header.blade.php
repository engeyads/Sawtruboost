<div class="relative items-top justify-center min-h-screen bg-white sm:items-center sm:pt-0 noselect">
    <div style='direction:ltr' id="mainmenu" class="fixed px-6  z-50 top-0 right-0 mainmenu">
        <div  class="fixed px-6  sm:block">

            <a href="/">
                <img src={{ URL::asset('images/SVG/Logo.svg') }} alt='Sawtruboost Logo' class='block h-16 w-auto Logo' />
                <img src={{ URL::asset('images/SVG/Logo_Text.svg') }} alt='Sawtruboost Logo Text' id='logotext'
                    class="logotext" />
            </a>
            <div id="subject" class='subject'></div>

        </div>
        <div class="sm:inline-flex justify-center items-center justify-between justify-items-center">
            <div class="links text-gray-700 dark:text-gray-500">
                <ul class='flex text-xl font-bold'>
                    <li><a href="@if(session()->get('locale') == 'en' || session()->get('locale') == null) {{ URL::asset('files/Sawtruboost_Company_Profile.pdf') }} @elseif(session()->get('locale') == 'ar') {{ URL::asset('files/Sawtruboost_Company_ProfileAr.pdf') }} @endif" target="_blank">{{ __('messages.CompanyProfile') }}</a></li>
                    <li><a href="{{ URL::to('blog') }}">{{ __('messages.Blog') }}</a></li>
                    <li>
                        <div class='topmenu2'>
                            <span>{{ __('messages.Services') }}</span><span class='triangleBlack'></span>
                            <div class='submenu2'>
                                <a href='/services'>{{ __('messages.Digital') }}</a>
                                <a href='/services'>{{ __('messages.Consultancy') }}</a>
                                <a href='/services'>{{ __('messages.GrowthStudies') }}</a>
                                <a href='/services'>{{ __('messages.Creativity') }}</a>
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
                    <li><a href='{{ route('boostnow') }}'>{{ __('messages.boostnow') }}</a></li>
                    <li><a href='{{ route('about') }}'>{{ __('messages.AboutUs') }}</a></li>
                    <li>
                        <div class='topmenu'><span>{{ __('messages.Services') }}</span><span class='triangleWhite'></span>
                            <div class='submenu '>
                                <div class="submenuItems flex">
                                    <a href='/services'>{{ __('messages.Digital') }}</a>
                                    <a href='/services'>{{ __('messages.Consultancy') }}</a>
                                    <a href='/services'>{{ __('messages.GrowthStudies') }}</a>
                                    <a href='/services'>{{ __('messages.Creativity') }}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ URL::to('contact') }}">{{ __('messages.ContactUs') }}</a></li>
                    <li><a href="{{ route('people') }}">{{ __('messages.People') }}</a></li>
                    <li class='extramenu'><a href="{{ URL::to('blog') }}">{{ __('messages.Blog') }}</a></li>
                    <li class='extramenu'><a href="@if(session()->get('locale') == 'en' || session()->get('locale') == null) {{ URL::asset('files/Sawtruboost_Company_Profile.pdf') }} @elseif(session()->get('locale') == 'ar') {{ URL::asset('files/Sawtruboost_Company_ProfileAr.pdf') }} @endif"
                            target="_blank">{{ __('messages.CompanyProfile') }}</a></li>
                </ul>
                <div class="col-md-4">

                    <select class="form-control changeLang">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                        <!--<option value="tr" {{-- session()->get('locale') == 'tr' ? 'selected' : '' --}}>Turkish</option> -->
                    </select>

                </div>
            </nav>
        </div>
    </div>

    @push('custom-scripts')
        <script type="text/javascript">
            var url = "{{ route('changeLang') }}";
            $(".changeLang").change(function() {

                window.location.href = url + "?lang=" + $(this).val();

            });
        </script>
    @endpush
