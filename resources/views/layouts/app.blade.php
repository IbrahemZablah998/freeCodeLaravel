<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img
                            class="pr-3"
                            style="height: 25px; border-right: 1px solid #333"; 
                            src="data:image/jpeg;base64,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" /></div>
                    <div class="pl-3">freeCodeGram</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
