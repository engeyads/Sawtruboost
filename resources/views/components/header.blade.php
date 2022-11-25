<div class="relative items-top justify-center min-h-screen bg-white sm:items-center sm:pt-0 ">
    <div id="mainmenu" class="fixed px-6  z-50 top-0 right-0 mainmenu" /*onScroll={handleScroll}* />
    <div class="fixed px-6  sm:block">

        <a href="/">
            <img src={{ URL::asset('images/SVG/Logo.svg') }} class='block h-16 w-auto Logo' />
            <img src={{ URL::asset('images/SVG/Logo_Text.svg') }} class="logotext" />
        </a>
        <div class='subject'></div>

    </div>
    <div class="sm:inline-flex justify-center items-center justify-between justify-items-center">
        <div class="links text-gray-700 dark:text-gray-500">
            <ul class='flex text-xl font-bold'>
                <li><a href="">Company Profile</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li>
                    <div class='topmenu2'>
                        <span>Services</span><span class='triangleBlack'></span>
                        <div class='submenu2'>
                            <a href="{{ route('services') }}">Our Services</a>
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
                <li><a href='{{ route('about') }}'>About Us</a></li>
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
                <li class='extramenu'><a href="{{ route('blog') }}">blog</a></li>
                <li class='extramenu'><a href="/">Company Profile</a></li>
            </ul>
            <div class="col-md-4">

                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                    <option value="tr" {{ session()->get('locale') == 'tr' ? 'selected' : '' }}>Turkish</option>
                </select>

            </div>
        </nav>
    </div>
</div>

@push('custom-scripts')

<script type="text/javascript">
    var url = "{{ route('changeLang') }}";



    $(".changeLang").change(function(){

        window.location.href = url + "?lang="+ $(this).val();

    });
</script>
@endpush
