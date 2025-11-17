<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Development version -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/js/app.js','resources/js/canvas.js','resources/js/draggable.js','resources/css/darkmode.css'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
{{--                 <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('messages.Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('messages.Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Menu
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('production')}}">Stanowiska Produkcja</a></li>
                                        <li><a class="dropdown-item" href="{{route('allstatus')}}">Lista wagonów</a></li>
                                        <li><a class="dropdown-item" href="{{route('park')}}">Wagony w parku</a></li>
                                    </ul>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('messages.Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span id="logout-timer" class="me-2 text-warning small"></span>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('messages.Logout') }}
                                    </a>                                    
                                    <a class="dropdown-item" href="{{ route('settings') }}">
                                        {{ __('Ustawienia') }}
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
            {{$slot}}
        </main>
    </div>
 <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Pobierz czas sesji z meta lub domyślnie 120 min
            let sessionLifetime = {{ config('session.lifetime', 120) }} * 60; // sekundy
            let timer = sessionLifetime;
            let timerEl = document.getElementById('logout-timer');
            let lastActivity = Date.now();

            function updateTimer() {
                let now = Date.now();
                let diff = Math.floor((now - lastActivity) / 1000);
                let left = timer - diff;
                if (left < 0) left = 0;
                let min = Math.floor(left / 60);
                let sec = left % 60;
                timerEl.textContent = min + ':' + (sec < 10 ? '0' : '') + sec;
                if (left === 0) {
                    // Wyloguj użytkownika przez żądanie POST, potem przekieruj na login (tylko raz!)
                    if (!window.__autoLogoutFired) {
                        window.__autoLogoutFired = true;
                        fetch("{{ route('logout') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name=\'csrf-token\']').getAttribute('content'),
                                'Accept': 'application/json',
                            },
                            credentials: 'same-origin',
                        }).finally(() => {
                            window.location.replace("/login");
                        });
                    }
                    return;
                }
            }

            // Resetuj timer przy aktywności
            ['mousemove','keydown','click','scroll'].forEach(evt => {
                document.addEventListener(evt, () => {
                    lastActivity = Date.now();
                });
            });

            setInterval(updateTimer, 1000);
        });
    </script></body>
</html>
