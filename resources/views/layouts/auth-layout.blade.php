<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Tab's Title --}}
        <title>@yield('page_title')</title>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

        {{-- FontAwesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">

            <header class="auth-header">
                <div class="container">
                    <nav class="auth-nav">
                        <div class="left-side">
                            <a href="{{ route('home') }}">
                                <i class="fas fa-angle-left"></i>
                                Torna a GialloBooleano
                            </a>
                        </div>
                        <div class="right-side">

                            <a href="{{ route('login') }}" class="{{ Request::route()->getName() == 'login' ? 'active' : '' }}">
                                {{ __('Login') }}
                            </a>

                            @if (Route::has('register'))

                                <a href="{{ route('register') }}" class="{{ Request::route()->getName() == 'register' ? 'active' : '' }}">
                                    {{ __('Registrati') }}
                                </a>

                            @endif
                        </div>
                    </nav>
                </div>
            </header>

            <div class="auth-content">
                <main>
                    @yield('content')
                </main>
            </div>

        </div>
    </body>
</html>
