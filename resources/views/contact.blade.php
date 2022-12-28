@extends('layouts.app')

@section('SEO')
<meta name="description" content=@if(session()->get('locale') == 'en' || session()->get('locale') == null) "A subpage in Sawtru Boost website enables our clients to contact us directly and commence their business development journey with us, this page allows potential clients to fill out the application form and book their appointment to have an individualized consultation with one of our team of experts." @elseif(session()->get('locale') == 'ar')  @endif/>
<meta name="keywords" content="@if(session()->get('locale') == 'en' || session()->get('locale') == null)  @elseif(session()->get('locale') == 'ar')  @endif">
@endsection

@section('content')
    <section class="about w-full yellowbg p-12">
        <center>
            <div>
                <h1 class='text-xxl font-bold fontBlont description'>
                    {{ __('messages.Get in Touch') }}
                </h1>
            </div>
        </center>
    </section>
<div class="contactusform">

    <h2>contact us</h2>
</div>
    <div id="contact">
        <div class="contact-box">
                    <div class="contact-links">

                        <div class="links2">
                            <div class="link">

                                <i class='fa fa-map-marker'></i> Akevler, 1066. Sk. No:34513 ,2 Beylikdüzü Osb/Esenyurt/İstanbul
                            </div>
                            <div class="link">
                                <a href='mialto:info@sawtruboost.com'><i class="fa fa-envelope"></i> info@sawtruboost.com</a>
                            </div>
                            <div class='map'>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1505.1087560449484!2d28.679727!3d41.020497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfbfb76c18c52f067!2sVenus%20Residence!5e0!3m2!1sen!2sus!4v1672131061042!5m2!1sen!2sus"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrapper">
                        <form>
                            <div class="form-item">
                                <input type="text" name="sender" required>
                                <label>Name:</label>
                            </div>
                            <div class="form-item">
                                <input type="text" name="email" required>
                                <label>Email:</label>
                            </div>
                            <div class="form-item">
                                <textarea class="" name="message" required></textarea>
                                <label>Message:</label>
                            </div>
                            <button class="submit-btn">Send</button>
                        </form>
                    </div>

                </div>
            </div>




    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
