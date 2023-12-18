<header x-data="{ open: false }" id="header" class="header fixed-top" style="position:fixed" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ url('/dashboard') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <img src="{{asset('assets/img/wanderlust (1).png')}}" alt="Main Page"  class="rounded-pill">
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}#destination">Destination</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}#tours">Tours</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}#reviews">Reviews</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}#besties">Besties tours</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}#team">Team</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                @if(auth()->user())
                    <div>
                        <a class="btn-getstarted scrollto">{{ Auth::user()->name }}</a>
                    </div>
                @else
                    <div>
                        <a href="{{ route('login') }}" class="btn-getstarted scrollto">Log in</a>
                        <a href="{{ route('register') }}" class="btn-getstarted scrollto">Register</a>
                    </div>
                @endif
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
