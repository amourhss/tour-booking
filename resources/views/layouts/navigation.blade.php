<header x-data="{ open: false }" id="header" class="header fixed-top" style="position:fixed" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ url('/dashboard') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <img src="{{asset('assets/img/wanderlust (1).png')}}" alt="Main Page"  class="rounded-pill">
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="index.html" class="active">Home 1 - index.html</a></li>
                        <li><a href="index-2.html">Home 2 - index-2.html</a></li>
                        <li><a href="index-3.html">Home 3 - index-3.html</a></li>
                        <li><a href="index-4.html">Home 4 - index-4.html</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                <li><a class="nav-link scrollto" href="index.html#services">Туры</a></li>
                <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li>
                            <a href="#">Column 1 link 1</a>
                            <a href="#">Column 1 link 2</a>
                            <a href="#">Column 1 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 2 link 1</a>
                            <a href="#">Column 2 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 3 link 1</a>
                            <a href="#">Column 3 link 2</a>
                            <a href="#">Column 3 link 3</a>
                        </li>
                        <li>
                            <a href="#">Column 4 link 1</a>
                            <a href="#">Column 4 link 2</a>
                            <a href="#">Column 4 link 3</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <x-dropdown align="right" width="48">
            <x-slot name="trigger">

                <div>
                    <a class="btn-getstarted scrollto">{{ Auth::user()->name }}</a>
                </div>

            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>

    </div>
</header>

{{--<!-- Responsive Navigation Menu -->--}}
{{--<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--    <div class="pt-2 pb-3 space-y-1">--}}
{{--        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </x-responsive-nav-link>--}}
{{--    </div>--}}

{{--    <!-- Responsive Settings Options -->--}}
{{--    <div class="pt-4 pb-1 border-t border-gray-200">--}}
{{--        <div class="px-4">--}}
{{--            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>--}}
{{--            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--        </div>--}}

{{--        <div class="mt-3 space-y-1">--}}
{{--            <x-responsive-nav-link :href="route('profile.edit')">--}}
{{--                {{ __('Profile') }}--}}
{{--            </x-responsive-nav-link>--}}

{{--            <!-- Authentication -->--}}
{{--            <form method="POST" action="{{ route('logout') }}">--}}
{{--                @csrf--}}

{{--                <x-responsive-nav-link :href="route('logout')"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                        this.closest('form').submit();">--}}
{{--                    {{ __('Log Out') }}--}}
{{--                </x-responsive-nav-link>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
