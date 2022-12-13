<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">

        <a href="/" class="simple-text logo-normal">
            <img src="{{ URL::asset('images/Full_Logo.svg') }}" alt="{{ __('messages.Sawtru Boost') }}">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('messages.Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon nc-settings-gear-65">{{--<img src="{{ asset('paper/img/laravel.svg') }}">--}}</i>
                    <p>
                            {{ __('Settings') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <i class='nc-icon nc-badge'></i>
                                <p class="">{{ __(' User Profile ') }}</p>
                            </a>
                        </li>
                        @can('list-users')
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('user.index', 'user') }}">
                                <i class='nc-icon nc-single-02'></i>
                                <p class="">{{ __(' User Management ') }}</p>
                            </a>
                        </li>


                        @endcan
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'blog' ? 'active' : '' }}">
                <a href="{{ route('blog.index', '') }}">
                    <i class="nc-icon nc-button-play"></i>
                    <p>{{ __('Blogs') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-button-play"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            {{--<li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                    <i class="nc-icon nc-spaceship text-white"></i>
                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>--}}
        </ul>
    </div>
</div>
