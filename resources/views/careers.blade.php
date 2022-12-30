@extends('layouts.app')

@section('content')
    <section class="about w-full yellowbg">
        <div>
            <center>
                <h1 class='text-xxl font-bold fontBlont'>
                    {{ __('messages.Careers') }}
                </h1>
            </center>

        </div>
    </section>

<br>
<br>
<br>
    <section class="section w-full">

        <center>

            <h2 class='text-xxl font-bold fontBlont py-4'>

                {{ __('messages.Comming Soon') }}
            </h2>
            <br />
        </center>



    </section>



    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
