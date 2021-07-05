<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Tab's Title --}}
        <title>@yield('page_title')</title>

        {{-- FontAwesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div id="cms">
            <header class="cms-header">
                <a href="{{ route('admin.home') }}">
                    <div class="logo">
                        <img src="{{ asset("img/boolpress-logo.png") }}" alt="">
                        <h4><span>Bool</span>Press</h4>
                    </div>
                </a>
                <nav>
                    <div class="nav-container">
                        <div class="">
                            <i class="fas fa-search"></i>
                            <input type="text" name="" placeholder="Cerca">
                        </div>
                        <div class="dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right my-dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <main>
                <div class="tools-list">
                    <a href="{{ route('admin.posts.create') }}">
                        <div class="tool {{ Request::route()->getName() == 'admin.posts.create' ? 'active' : '' }}">
                            <i class="fas fa-plus"></i>
                            Crea un nuovo post
                        </div>
                    </a>
                    <a href="{{ route('admin.posts.index') }}">
                        <div class="tool {{ Request::route()->getName() == 'admin.posts.index' || Request::route()->getName() == 'admin.posts.edit' ? 'active' : '' }}">
                            <i class="fas fa-pen"></i>
                            Modifica un post
                        </div>
                    </a>
                    <a href="{{ route('admin.category-page') }}">
                        <div class="tool">
                            <i class="fas fa-copy"></i>
                            Categorie
                        </div>
                    </a>
                    <a href="">
                        <div class="tool">
                            <i class="fas fa-tasks"></i>
                            Tasks
                        </div>
                    </a>
                    <a href="">
                        <div class="tool">
                            <i class="fas fa-puzzle-piece"></i>
                            Add-Ons
                        </div>
                    </a>
                </div>
                <div class="public-page">
                    @yield('guest-view')
                </div>
            </main>
        </div>

    </body>
</html>
