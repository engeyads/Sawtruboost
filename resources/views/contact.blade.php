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


</div>
    <div id="contact">
        <div class="contact-box">
                    <div class="contact-links">

                        <div class="links2">
                            <div class="link">

                                For more enquiries and faster response please email us directly
                            </div>
                            <div class="link">
                                <a href='mialto:info@sawtruboost.com'><i class="fa fa-envelope"></i> info@sawtruboost.com</a>
                            </div>
                            <div class='link'>
                                {{ __('messages.Turkiye') }}:<a href='tel:+905064677987'>+90 506 467 79 87</a>
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
