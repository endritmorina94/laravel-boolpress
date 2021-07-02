<header class="guest-header">
    <div class="container-fluid my_navbar">
        <div class="blurred-bg"></div>

        <div class="navigator">

            <div class="container">
                <!-- Left Side Of Navbar -->
                @guest
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
                @else
                    <div class="my_navigator">
                        <a class="logo" href="{{ route('admin.home') }}">
                            <h1>
                                <span>Giallo</span>Booleano
                            </h1>
                            <img src="{{ asset('img/chef-hat.png') }}" alt="Logo">
                        </a>
                    </div>
                @endguest
                <!-- Center Side Of Navbar -->
                <ul class="menu">
                    @guest
                        <li>
                            <a class="nav-link {{ Request::route()->getName() == 'home' ? 'active' : '' }}"
                                href="{{ route('home') }}">{{ __('Home') }}
                            </a>
                        </li>
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
                                href="{{ route('admin.posts.index') }}">{{ __('Blog') }}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link"
                                href="#">{{ __('API Vue') }}
                            </a>
                        </li>

                        <!-- Authentication Links -->
                        <li>
                            <a class="nav-link" href="#">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="nav-link" href="#">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
