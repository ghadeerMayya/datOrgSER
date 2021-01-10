<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DAtOrg') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
<!-- Fonts -->



    <!-- Styles -->
    <link href="{{ url('css/basic7.css') }}" rel="stylesheet">
    {{--    <link href="{{ url('css/forms.css') }}" rel="stylesheet">--}}
    {{--    <link href="{{ url('css/admin8.css') }}" rel="stylesheet">--}}
    {{--    <link href="{{ url('css/profile9.css') }}" rel="stylesheet">--}}
    <link href="{{ url('css/case15.css') }}" rel="stylesheet">
        <link href="{{ url('css/profile_end5.css') }}" rel="stylesheet">
    {{--    <link href="{{ url('css/right3.css') }}" rel="stylesheet">--}}
    <link href="{{ url('css/alert2.css') }}" rel="stylesheet">






</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top " style="direction: ltr;font-size: 10px">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'DATorgSER') }}
            </a>
            <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <button class="dropdown-item" id="userprofile">
                                    Open profile
                                </button>
                                {{--                                <a class="dropdown-item">--}}
                                {{--                                    {{ Auth::user()->priv }}--}}
                                {{--                                </a>--}}

                                <a class="dropdown-item" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                {{--                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form>--}}

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                {{--                            </div>--}}
                                {{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}

                            </div>


                        </li>


                    @endguest

                </ul>
                {{--                <form class="form-inline my-2 my-lg-0">--}}
                {{--                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--                </form>--}}
            </div>

            <button href="#menu-toggle" id="menu-toggle" class="navbar-brand btn "><i class="fa fa-align-justify" aria-hidden="true"></i>


            </button>

        </div>

    </nav>

    {{--    <main class="py-4">--}}
    @yield('content')
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
{{--<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

{{--<script src="{{ asset('js/1.js') }}" rel="script"></script>--}}
{{--<script src="{{ asset('js/2.js') }}" rel="script"></script>--}}
{{--<script src="{{ asset('js/j.js') }}" rel="script"></script>--}}
@yield('scripts')

</body>
</html>
