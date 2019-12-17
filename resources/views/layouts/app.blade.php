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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <nav class="">
            <div class="container">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#1abc9c"><path d="M65.84375,1.34375c-2.96853,0 -5.375,2.40647 -5.375,5.375c0,2.96853 2.40647,5.375 5.375,5.375c2.96853,0 5.375,-2.40647 5.375,-5.375c0,-2.96853 -2.40647,-5.375 -5.375,-5.375zM106.15625,1.34375c-2.96853,0 -5.375,2.40647 -5.375,5.375c0,2.96853 2.40647,5.375 5.375,5.375c2.96853,0 5.375,-2.40647 5.375,-5.375c0,-2.96853 -2.40647,-5.375 -5.375,-5.375zM52.64246,22.10626c-0.76452,-0.04016 -1.54636,0.15012 -2.25183,0.60364c-1.88125,1.20938 -2.55313,3.6276 -1.34375,5.50885c7.79375,13.16875 21.63438,20.96197 36.95313,20.96197c15.31875,0 29.15885,-7.79322 37.08697,-20.96197c1.20938,-1.88125 0.5375,-4.43385 -1.34375,-5.50885c-1.88125,-1.20937 -4.43385,-0.5375 -5.50885,1.34375c-6.58438,10.61563 -17.7375,17.06457 -30.23437,17.06457c-12.49688,0 -23.65053,-6.31457 -30.10053,-17.06457c-0.75586,-1.17578 -1.98282,-1.88046 -3.25702,-1.94739zM48.56659,49.58752c-0.5102,-0.021 -1.03143,0.06351 -1.53534,0.26507l-26.875,9.5401c-0.80625,0.26875 -1.61197,0.94167 -2.14947,1.74792l-16.125,26.875c-0.5375,0.94062 -0.67345,2.28437 -0.27032,3.35938c0.40312,1.075 1.3448,2.01667 2.4198,2.4198l64.5,22.84375c0.40313,0.13437 0.94062,0.2677 1.34375,0.2677c1.34375,0 2.68697,-0.67187 3.49322,-2.01562l8.60053,-14.37708v27.94843v32.38385l-56.4375,-20.01978v-27.95105c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v30.90625c0,1.74687 1.075,3.22605 2.6875,3.76355l64.5,22.84375c0.40313,0.13438 0.80625,0.2677 1.34375,0.2677c0.40313,0 0.94062,-0.13333 1.34375,-0.2677l64.5,-22.84375c1.6125,-0.5375 2.6875,-2.15105 2.6875,-3.76355v-45.14947l13.4375,-4.70312c1.075,-0.40313 2.01667,-1.3448 2.4198,-2.4198c0.40312,-1.075 0.2677,-2.41822 -0.40417,-3.49322l-16.125,-26.875c0,0 0.00052,-0.13385 -0.13385,-0.13385l-0.40417,-0.40418c0,-0.13437 -0.13333,-0.13332 -0.2677,-0.2677l-0.27032,-0.27032c-0.13438,0 -0.13333,-0.13385 -0.2677,-0.13385c-0.13438,-0.13437 -0.2698,-0.13332 -0.40417,-0.2677c-0.13438,0 -0.13333,-0.13385 -0.2677,-0.13385c0,0 -0.13385,-0.0021 -0.13385,-0.13647l-26.875,-9.5401c-2.15,-0.80625 -4.43543,0.40418 -5.1073,2.4198c-0.80625,2.15 0.40418,4.4328 2.4198,5.10468l16.125,5.77917l-52.2724,18.5448l-52.40625,-18.5448l16.125,-5.77917c2.15,-0.80625 3.22605,-3.08905 2.4198,-5.10468c-0.60469,-1.6125 -2.04134,-2.62189 -3.57196,-2.68488zM23.38178,67.99322l56.7052,20.15625l-11.9599,19.88855l-56.7052,-20.15625zM148.75208,67.99322l11.82605,19.88855l-56.7052,20.15625l-11.82605,-19.88855z"></path></g></g></svg>
                        </a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto total">
                        <!-- Authentication Links -->
                            @guest
                            
                        <div class="derecha">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><img class="imagentop" src="img/web_page/login.png"></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><img class="imagentop" src="img/web_page/newuser.png"></a>
                                </li>
                        </div>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#" >
                                    {{ Auth::user()->name }} 
                                </a>
                            </li>

                            <li class="nav-item izquierda">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>

                            <li class="nav-item">
                            <form class="busca" action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Jokuak bilatu"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                            </li>
                        <div class="derecha">
                            <li class="nav-item">
                            <a class="navbar-brand" href="{{ url('games/create') }}">+</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><img class="imagentop" src="img/web_page/logout.png"></a>
                            </li>
                        </div>
                        @endguest
                        
                    </ul>
                
            </div>
        </nav>
        <div class="container">
        @if(Auth::guest())
            <a href="/login" class="btn btn-info margen"> You need to login to do this😜😜 >></a>
            <a href="/register" class="btn btn-info margen"> Not a user? Register here😜😜 >></a>
        @endif
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
