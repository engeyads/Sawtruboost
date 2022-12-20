@extends('layouts.app')

@section('content')
    <section class="about w-full yellowbg p-12">
        <div>
            <h1 class='text-xxl font-bold fontBlont description'>
                {{ __('messages.Contact') }}
            </h1>
        </div>
    </section>

            <div id="contact">
                <div class="contact-box">
                    <div class="contact-links">
                        <h2>SAWTRU BOOST</h2>
                        <div class="links">
                            <div class="link">
                                <a><i class="fab fa-whatsapp"></i> WhatsApp</a>
                            </div>
                            <div class="link">
                                <a><i class="fab fa-tiktok"></i> TikTok</a>
                            </div>
                            <div class="link">
                                <a><i class="fab fa-linkedin" aria-hidden="true"></i> LinkedIn</a>
                            </div>
                            <div class="link">
                                <a><i class="fab fa-instagram"></i> Instagram</a>
                            </div>
                            <div class="link">
                                <a><i class="fab fa-facebook-f"></i>Facebook</a>
                            </div>
                            <div class="link">
                                <a><i class="fab fa-twitter"></i> Twitter</a>
                            </div>
                            <div class="link">
                                <a><i class="fab fa-pinterest"></i> Pinterest</a>
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
