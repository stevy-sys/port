<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto" href="{{ route('welcome') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
        <li><a class="nav-link scrollto" href="{{ route('service') }}">Services</a></li>
        <li><a class="nav-link scrollto " href="{{ route('portfolio') }}">Work</a></li>
        <li><a class="nav-link scrollto " href="#blog">Blog</a></li>
        {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                            class="bi bi-chevron-right"></i></a>
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
        </li> --}}
        <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>

        {{-- @auth
            <li><a href="{{ url('/home') }}" class="nav-link scrollto">Home</a></li>
        @else
            <li><a href="{{ route('login') }}" class="nav-link scrollto">Login</a></li>

            @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="nav-link scrollto">Register</a></li>
            @endif
        @endauth --}}
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->