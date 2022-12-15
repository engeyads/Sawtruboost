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
                <a data-toggle="collapse" aria-expanded="true" href="#Settings">
                    <i class="nc-icon nc-settings-gear-65"></i>
                    <p>
                            {{ __('Settings') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="Settings">
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
            @can('crm')
            <li class="{{ $elementActive == 'leads' || $elementActive == 'deals' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#CRM">
                    <i class="nc-icon nc-tie-bow"></i>
                    <p>
                            {{ __('CRM') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="CRM">
                    <ul class="nav">
                        @can('list-leads')
                            <li class="{{ $elementActive == 'leads' ? 'active' : '' }}">
                                <a href="{{ route('leads.index') }}">
                                    <i class='nc-icon nc-mobile'></i>
                                    <p class="">{{ __(' Leads ') }}</p>
                                </a>
                            </li>
                        @endcan
                        @can('list-deals')
                            <li class="{{ $elementActive == 'deals' ? 'active' : '' }}">
                                <a href="{{ route('deals.index') }}">
                                    <i class='nc-icon nc-briefcase-24'></i>
                                    <p class="">{{ __(' Deals ') }}</p>
                                </a>
                            </li>
                        @endcan

                    </ul>
                </div>
            </li>
            @endcan
            {{--
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
                </li>}}
                --}}
        </ul>
    </div>
</div>
