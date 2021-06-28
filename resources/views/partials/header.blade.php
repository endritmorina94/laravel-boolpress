<header>
    <div class="container-fluid my_navbar">
        <div class="blurred-bg"></div>

        <div class="navigator">

            <div class="container">
                <!-- Left Side Of Navbar -->
                <div class="my_navigator">
                    <a class="logo" href="{{ route('home') }}">
                        <h1>
                            <span>Giallo</span>Booleano
                        </h1>
                        <img src="{{ asset('img/chef-hat.png') }}" alt="Logo">
                    </a>

                            {{-- <a class="nav-link {{ Request::route()->getName() == 'home' ? 'active' : '' }}"
                                href="{{ route('home') }}">{{ __('Home') }}
                            </a> --}}
                </div>
                <!-- Center Side Of Navbar -->
                <ul class="menu">
                    @guest
                        <li>
                            <a class="nav-link {{ Request::route()->getName() == 'blog' ? 'active' : '' }}"
                                href="{{ route('blog') }}">{{ __('Blog') }}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::route()->getName() == 'vue-posts' ? 'active' : '' }}"
                                href="{{ route('vue-posts') }}">{{ __('API Vue') }}
                            </a>
                        </li>

                        <!-- Authentication Links -->
                        <li>
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li>
                        <a class="nav-link {{ Request::route()->getName() == 'admin.home' ? 'active' : '' }}"
                            href="{{ route('admin.home') }}">{{ __('Home') }}
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::route()->getName() == 'admin.posts.index' ? 'active' : '' }}"
                            href="{{ route('admin.posts.index') }}">{{ __('BlogAdmin') }}
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::route()->getName() == 'admin.posts.create' ? 'active' : '' }}"
                            href="{{ route('admin.posts.create') }}">{{ __('Crea un nuovo post') }}
                        </a>
                    </li>
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
