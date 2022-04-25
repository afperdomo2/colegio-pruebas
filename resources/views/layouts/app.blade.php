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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                            @if (Route::has('login')) @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      {{ __('Students') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Student history') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Documents') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Transfers') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __('Management') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Partial grades') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Matrícula') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Asignación de materias') }}</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Students') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Teachers') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Tutors') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __('Reports') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Records') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Classroom report') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Reporte de fallas') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Report card') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __('Parametrization') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Institution') }}</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Documents') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Caracterización') }}</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Aspects') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Areas') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Subjects') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Grades') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Periods') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Juicio de valoración') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Criteria') }}</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Types of documents') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Genders') }}</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Cities') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('regions') }}">{{ __('Regions') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('countries') }}">{{ __('Countries') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Admin
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Users') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Profiles') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('Permissions') }}</a></li>
                                    </ul>
                                </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Your profile') }}</a>
                                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Change password') }}</a>
                                    <hr class="dropdown-divider">
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
