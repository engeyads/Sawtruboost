@extends('layouts.app')

@section('content')
    <section class="about w-full yellowbg">
        <div>
                <h1 class='text-xxl font-bold fontBlont description'>
                    {{ __('messages.Contact') }}
                </h1>
        </div>
    </section>

    <section class="section w-full">
<center>

    <h2 class='text-xl font-bold fontBlont py-4'>
        {{ __('messages.Contactus') }}
    </h2>

    <table>
        <tr>
            <td>
                <ul>
                    <li>

                        <span>Address</span>
                    </li>
                    <li>

                        <span>Email</span>
                    </li>
                </ul>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=venus%20residanse&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:150px;width:300px;}</style><a href="https://www.embedgooglemap.net">embedding maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:150px;width:300px;}</style></div></div>
            </td>
            <td>
                <form class='contactForm' action="">
                    <input type="text" placeholder="NAME"><br>
                    <input type="text" placeholder="EMAIL"><br>
                    <input type="text" placeholder="MESSAGE"><br>
                    <button type="submit"> SUBMIT</button>
                </form>
            </td>
        </tr>
    </table>
</center>

    </section>



    @push('custom-scripts')
        <script type="module" src="{{ URL::asset('js/home.js') }}"></script>
    @endpush
@endsection
