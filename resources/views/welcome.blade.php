@extends('layouts.app')

@section('SEO')
    <meta name="description"
        content=@if (session()->get('locale') == 'en' || session()->get('locale') == null) "Sawtru Boost is a business development and marketing solutions agency. We tend to incarnate our identity in our visual story narrative, from our logo, which shines with yellow as gold, to iconography inspired by the digital world and the letter S from Sawtru, the mother corporation. Our creative director created the vectors in the first section of our homepage specifically for Sawtru Boost to conceptualize growth and development while also reflecting the diversity of our team of experts. The menu displays our company profile as a marketing agency, showcasing our set of services, which is also accessible via the services button in the upper right corner. Our set of services includes digital marketing-related services, such as social media administration, website development, seo and all sorts of digital marketing.

A section of our partners as service providers, such as Microsoft, Wordpress, Meta, Wix, Google, and Shopify, can be found by scrolling down the homepage. Since we are a trusted partner for them. Then there's a section with more descriptive information about our main four service categories. Furthermore, as you scroll down, there is a section that shows our partners, our precious clients who have trusted us and worked with us for years. We provided our latest insights about the business field and digital marketing in the lower right corner of our homepage, and finally in our website footer, which includes our terms and conditions, privacy policy, cookies, contacts, partners, careers, and locations.

The website is entirely designed and developed by Sawtru Boost" @elseif(session()->get('locale') == 'ar') "ساوترو بوست هي وكالة حلول تسويق وتطوير أعمال. نميل إلى تجسيد هويتنا في سرد ​​قصتنا المرئية ، بدءًا من شعارنا الذي يتألق باللون الأصفر كالذهبي ، إلى الأيقونات المستوحاة من العالم الرقمي والحرف S من ساوترو ، الشركة الأم. أنشأ مديرنا الإبداعي المتجهات في القسم الأول من صفحتنا الرئيسية خصيصًا لساوترو بوست لتصور النمو والتنمية مع عكس تنوع فريق الخبراء لدينا. تعرض القائمة ملف تعريف شركتنا كوكالة تسويق ، وتعرض مجموعة خدماتنا ، والتي يمكن الوصول إليها أيضًا عبر زر الخدمات في الزاوية اليمنى العليا. تشمل مجموعة خدماتنا الخدمات المتعلقة بالتسويق الرقمي ، مثل إدارة الوسائط الاجتماعية وتطوير مواقع الويب وتحسين محركات البحث وجميع أنواع التسويق الرقمي.

يمكن العثور على قسم من شركائنا كمقدمي خدمات ، مثل مايكروسوفت و ووردبريس و ميتا و ويكس و جوجل و شوبيفاي عن طريق التمرير لأسفل الصفحة الرئيسية. لأننا شريك موثوق لهم. ثم هناك قسم يحتوي على مزيد من المعلومات الوصفية حول فئات الخدمة الأربع الرئيسية لدينا. علاوة على ذلك ، أثناء التمرير لأسفل ، يوجد قسم يعرض شركائنا وعملائنا الثمين الذين وثقوا بنا وعملوا معنا لسنوات. قدمنا ​​أحدث رؤيتنا حول مجال الأعمال والتسويق الرقمي في الركن الأيمن السفلي من صفحتنا الرئيسية ، وأخيرًا في تذييل موقعنا الإلكتروني ، والذي يتضمن الشروط والأحكام وسياسة الخصوصية وملفات تعريف الارتباط وجهات الاتصال والشركاء والوظائف والمواقع.

تم تصميم الموقع وتطويره بالكامل بواسطة ساوترو بوست" @endif />
    <meta name="keywords"
        content=@if (session()->get('locale') == 'en' || session()->get('locale') == null) "marketing, Seo, target ad, digital marketing, affiliate marketing, social media marketing, marketing strategy, email marketing, marketing plan 6, advertising agency, internet marketing, digital marketing course 4, e marketing , seo services, direct marketing, digital marketing agency, seo company, what is digital marketing, b2b marketing, marketing online, marketing agency, social marketing, marketing research, web marketing, online advertising, imc, pr, market, Advertisement, brand, marketing mix, Dma, content marketing, what is marketing, marketing plan, market research, advertising agency, marketing jobs, marketing management, Advertise, marketing definition, internet marketing" @elseif(session()->get('locale') == 'ar') "التسويق ، SEO ، الإعلان المستهدف ، التسويق الرقمي ، التسويق بالعمولة ، التسويق عبر وسائل التواصل الاجتماعي ، استراتيجية التسويق ، التسويق عبر البريد الإلكتروني ، خطة التسويق 6 ، وكالة الإعلان ، التسويق عبر الإنترنت ، دورة التسويق الرقمي 4 ، التسويق الإلكتروني ، خدمات تحسين محركات البحث ، التسويق المباشر ، وكالة التسويق الرقمي ، شركة SEO ، ما هو التسويق الرقمي ، تسويق b2b ، التسويق عبر الإنترنت ، وكالة التسويق ، التسويق الاجتماعي ، أبحاث التسويق ، التسويق عبر الإنترنت ، الإعلان عبر الإنترنت ، IMC ، العلاقات العامة ، السوق ، الإعلان ، العلامة التجارية ، المزيج التسويقي ، Dma ، تسويق المحتوى ، ما هو التسويق ، خطة التسويق ، أبحاث السوق ، وكالة الإعلان ، وظائف التسويق ، إدارة التسويق ، الإعلان ، تعريف التسويق ، التسويق عبر الإنترنت" @endif>
@endsection

@section('content')
    <section class='w-full first customYellowbg' style="direction:ltr">
        <div class='bground'>
            <table>
                <tr>
                    <td>
                        <h1 class="heading">

                            {{ __('messages.CompanyWord') }}<br />
                            {{ __('messages.CompanyWord2') }}

                        </h1>

                    </td>

                </tr>
                <tr>
                    <td>
                        <button onclick="window.location.href = '{{ URL::to('boostnow') }}'" class='btn'
                            style="direction:{{ __('messages.direction') }}">

                            <h1>
                                {{ __('messages.boostnow') }}
                            </h1>

                        </button>
                    </td>
                </tr>
            </table>
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

    <section id='second' class='w-full second'>
        <div>
            <center>
                <h2 class='socilaword text-xl font-bold'>{{ __('messages.socialword') }}</h2>
            </center>
        </div>
    </section>
    <hr>
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
                            <td><img src={{ URL::asset('images/microsoft.webp') }} width="160px" alt="microsoft logo" />
                            </td>
                            <td><img src={{ URL::asset('images/wix.webp') }} width="160px" alt="wix logo" /></td>
                            <td><img src={{ URL::asset('images/wordpress.webp') }} width="160px" alt="wordpress logo" />
                            </td>
                            <td><img src={{ URL::asset('images/shopify.webp') }} width="160px" alt="shopify logo" /></td>
                            <td><img src={{ URL::asset('images/sortlist-silver.webp') }} width="160px"
                                    alt="sortlist logo" />
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
    <hr>
    <section id='third' class=" third" style='direction:{{ __('messages.direction') }}'>
        <center>
            <h1 class='hidden fontBlont text-xxl font-bold text-custom-gray stickToHeader'>
                {{ __('messages.OURMAGICALBOOSTS') }}</h1>
        </center>
        <section id="panels">

            <div id="panels-container">


                <article id="panel-1" class="panel w-full">
                    <div class="container1">
                        <div class="panel-heading absolute">

                            <h2 class="px-14">
                                {{ __('messages.OURMAGICALBOOSTS2') }}
                            </h2>
                        </div>
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
                                        <td class="img">

                                            <img class="" src={{ URL::asset('images/1.webp') }}
                                                alt="Digital Marketing" />
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
                <article id="panel-3" class="panel w=full">
                    <div class="container1">
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
                                                    alt="consultancy" />
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
                                                    alt="innovation & creativity" />
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

        </div>
        <!--
                                        <section id="panelsMobile">
                                            <h2 class="text-xl mt-32 w-full font-bold fontBlont text-custom-gray ">
                                                {{-- __('messages.OURMAGICALBOOSTS2') }}
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
                                <img class="" src={{ URL::asset('images/innovation_&_creativity.webp') --}}
                                                                    alt="" />

                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                        </section>
                                    -->
    </section>

    <section id='fourth' class='w-full py-20 fourth'>
        <div>
            <center>
                <h1 class='fontBlont text-xxl font-bold text-custom-gray stickToHeader'>{{ __('messages.Partners') }}</h1>
            </center>
            <center>
                <div class=" slider">
                    <table class="slide-track">
                        <tr class="py-4 partners">
                            <td class="slide"><img src={{ URL::asset('images/client1.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/client3.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/client2.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/cybersky.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/eledaay.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/danamardini.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/client1.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/client3.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/client2.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/cybersky.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/eledaay.webp') }} width="160px"
                                    alt="" /></td>
                            <td class="slide"><img src={{ URL::asset('images/danamardini.webp') }} width="160px"
                                    alt="" /></td>
                        </tr>
                    </table>
                </div>
            </center>
        </div>


    </section>

    <section id='fifth' class='w-full yellowbg fifth'>
        <center>
            <h1 class='fontBlont text-xxl font-bold text-custom-gray stickToHeader'>{{ __('messages.LATESTINSIGHTS') }}
            </h1>
        </center>
        <div class="blog-home5 py-5">
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
                            <h5 class="card-title my-3 font-weight-normal">Online Consumption: Growing Continually or
                                Just Striking a Plateau?</h5>
                            {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p> --}}
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
                            src={{ URL::asset('images/man-holding-credit-card-hand-entering-security-code-using-laptop-keyboard.webp') }}
                            alt="Card image" />
                        <div class="card-img-overlay overflow-hidden">
                            <div class="d-flex align-items-center">
                                <span
                                    class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity,
                                    Ngo</span>
                                <div class="ml-2">
                                    <span class="ml-2">Oct 18, 2022</span>
                                </div>
                            </div>
                            <h5 class="card-title my-3 font-weight-normal">Benefits and Drawbacks: In-House vs.
                                Outsourcing.</h5>
                            <p class="card-text">Despite the fact that businesses have traditionally outsourced creative
                                minds, there is a significant shift taking place: businesses are increasingly outsourcing
                                out marketing operations and analytics...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom-scripts')
        <script>
            var isMobile = false; //initiate as false
            // device detection
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
                .test(navigator.userAgent) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
                .test(navigator.userAgent.substr(0, 4))) {
                isMobile = true;
            }

            const logotext = $('.logotext');
            const logo = $('.Logo');
            const navbar = $('.mainmenu');

            let second = $('#second');
            let third = $('#third');
            let fourth = $('#fourth');
            let fifth = $('#fifth');



            if (!isMobile) {
                gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

                /* Main navigation */
                let panelsSection = document.querySelector("#panels");
                let panelsContainer = document.querySelector("#panels-container");
                let tween;

                /* Panels */
                const panels = gsap.utils.toArray("#panels-container .panel");
                tween = gsap.to(panels, {
                    xPercent: {{ __('messages.direction') == 'ltr' ? -100 : 100 }} * (panels.length - 1),
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

                if (second !== null) {
                    second = $('#second').offset().top;
                    third = $('#third').offset().top;
                    fourth = $('#fourth').offset().top;
                    fifth = $('#fifth').offset().top;
                    $(window).on('resize', function() {

                        second = $('#second').offset().top;
                        third = $('#third').offset().top;
                        fourth = $('#fourth').offset().top;
                        fifth = $('#fifth').offset().top;
                    });

                    $(window).on('scroll', function() {

                        if (window.scrollY >= second - (navbar.height() * 2)) {

                            logo.css('filter', 'grayscale(0) brightness(100%)');
                            logotext.show();
                            $('.stickToHeader:eq(0)').css({
                                'display': 'none',
                                'position': 'initial'
                            });
                        }
                        if (window.scrollY >= third - (navbar.height() * 2)) {
                            logo.css('filter', 'grayscale(100%) brightness(50%)');
                            logotext.hide();
                            $('.stickToHeader:eq(1)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(2)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(0)').css({
                                'display': ' block',
                                'position': 'fixed',
                                'font-size': '1.2rem'
                            });
                        }
                        if (window.scrollY >= fourth - (navbar.height() * 2)) {
                            $('.stickToHeader:eq(0)').css({
                                'display': ' none',
                                'position': 'initial'
                            });
                            $('.stickToHeader:eq(2)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(1)').css({
                                'position': 'fixed',
                                'font-size': '1.2rem'
                            });
                        }
                        if (window.scrollY >= fifth - (navbar.height() * 2)) {
                            $('.stickToHeader:eq(0)').css({
                                'display': 'none',
                                'position': 'initial'
                            });
                            $('.stickToHeader:eq(1)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(2)').css({
                                'position': 'fixed',
                                'font-size': '1.2rem'
                            });
                        }
                    });
                }
            } else {

                if (second !== null) {
                    second = $('#second').offset().top;
                    third = $('#third').offset().top;
                    fourth = $('#fourth').offset().top;
                    fifth = $('#fifth').offset().top;

                    $(window).on('scroll', function() {

                        if (window.scrollY >= second - (navbar.height() * 2)) {

                            logo.css('filter', 'grayscale(0) brightness(100%)');
                            logotext.show();
                            $('.stickToHeader:eq(0)').css({
                                'display': 'none',
                                'position': 'initial'
                            });

                        }
                        if (window.scrollY >= third - (navbar.height() * 2)) {
                            logo.css('filter', 'grayscale(100%) brightness(50%)');
                            logotext.hide();
                            $('.stickToHeader:eq(1)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(2)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(0)').css({
                                'display': ' block',
                                'position': 'fixed',
                                'font-size': '1.2rem'
                            });
                        }
                        if (window.scrollY >= fourth - (navbar.height() * 2)) {
                            $('.stickToHeader:eq(0)').css({
                                'display': ' none',
                                'position': 'initial'
                            });
                            $('.stickToHeader:eq(2)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(1)').css({
                                'position': 'fixed',
                                'font-size': '1.2rem'
                            });
                        }
                        if (window.scrollY >= fifth - (navbar.height() * 2)) {
                            $('.stickToHeader:eq(0)').css({
                                'display': 'none',
                                'position': 'initial'
                            });
                            $('.stickToHeader:eq(1)').css({
                                'position': 'initial',
                                'font-size': 'xx-large'
                            });
                            $('.stickToHeader:eq(2)').css({
                                'position': 'fixed',
                                'font-size': '1.2rem'
                            });
                        }
                    });
                }
            }
        </script>
        <script>
            $('#slider').slick({
                draggable: false,
                slidesToShow: 5,
                infinite: true,
                slidesToScroll: 5,
                autoplay: true,
                autoplaySpeed: 100,
                arrows: false,
                speed: 6000,
                cssEase: 'ease-in-out',
                variableWidth: false,
                initialSlide: 1,
                pauseOnHover: false,
                respondTo: window,
                rtl: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            speed: 4000,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            speed: 4000,
                        }
                    }
                ],
            });
        </script>
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
