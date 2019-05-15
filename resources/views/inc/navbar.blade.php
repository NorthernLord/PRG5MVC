<nav class="navbar sticky-top navbar-expand-md" id="navbar">
    <div class="container navbar-container">
        <a href="{{ url('/') }}">
            <img class="navbar-logo" src="/storage/logos/logo-sm-bracket.png" id="navbar-logo" alt="Berend Kalberg">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{Request::path() == 'over-mij' ? 'active' : 'null'}}">
                    <a class="nav-link" href="/over-mij">Over mij</a>
                </li>
                <li class="nav-item {{Request::path() == 'portfolio' ? 'active' : 'null'}}">
                    <a class="nav-link" href="/portfolio">Portfolio</a>
                </li>
                <li class="nav-item {{Request::path() == 'posts' ? 'active' : 'null'}}">
                    <a class="nav-link" href="/posts">Blog</a>
                </li>

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{Request::path() == 'login' ? 'active' : 'null'}}" href="{{ route('login') }}">{{ __('Inloggen') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Uitloggen') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
