<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" >
    <div class="container-fluid" id="navbarSupportedContent">
    <a class="navbar-brand" href="../home"><img src="/storage/album_covers/v.png"> HD MOVIES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="#navbarResponsive">





            <livewire:search-dropdown>
        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto  ">
            <!-- Authentication Links -->
            @guest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else

                    <li class="nav-item " >
                        <a href="{{ route('home') }}" class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}">Home</a>
                    </li>


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>

</nav>
