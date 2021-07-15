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
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}

    <!-- Styles -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    {{-- <link href="{{ asset('assets/css/') }}" rel="stylesheet"> --}}
    @livewireStyles
</head>

<body>
    <div id="">
        {{-- <main class=""> --}}
        {{-- <!--Start Header-->
<header id="header">
    <div class="container">
    <div class="row">
    <div id="logo-bar" class="col-sm-12">
        <div id="logo">
            <h1><a href="index.html"><img src="images/logo.png"/></a></h1>
        </div>
    </div>

    <!-- Navigation
    ================================================== -->
    <div id="menu-bar" class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light  rounded mb-4">
            <!--  <div class="container">-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link "><span class="data-hover"data-hover="home">home</span></a></li>

                    <li class="nav-item"><a href="{{ url('/categories') }}" class="nav-link "><span class="data-hover"data-hover="categories ">categories</span></a></li>

                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link "><span class="data-hover"data-hover="about">about</span></a></li>

                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link "><span class="data-hover"data-hover="contact">contact</span></a></li>

                    @guest
                    @if (Route::has('register'))
                    <li class="nav-item"><a  href="{{ route('register') }}" class="nav-link "><span class="data-hover"data-hover="sign up">{{ __('sign up') }}</span></a></li>
                     @endif
                    @if (Route::has('login'))

                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link "><span class="data-hover"data-hover="login">{{ __('Login') }}</span></a></li>

                @endif
                @else




                    <li class="nav-item"><a class="nav-link " href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                         <span class="data-hover"data-hover="contact">{{ __('Logout') }}</span></a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest
                </ul>
        </nav>
    </div> --}}
        <div class="wrapper">
            <div class="sidebar" data-color="purple" data-image="{{ config('app.url') }}assets/img/sidebar-5.jpg">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="{{ config('app.name') }}" class="simple-text">
                            {{ config('app.name') }} Admin Panel
                        </a>
                    </div>

                    <ul class="nav">
                        <li class="active">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="pe-7s-graph"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.clients') }}">
                                <i class="pe-7s-user"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.posts') }}">
                                <i class="pe-7s-note2"></i>
                                <p>Posts</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.comments') }}">
                                <i class="pe-7s-comment"></i>
                                <p>Comments</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.settings') }}">
                                <i class="pe-7s-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.category') }}">
                                <i class="pe-7s-albums"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navigation-example-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"> @yield('page')</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="{{ url('/') }}">
                                        <p>GoTo Site</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">{{ auth()->user()->name }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <p>Log out</p>
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <li class="separator hidden-lg"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                    {{ $slot }}
            </div>
        </div>
        @livewireScripts
        <script src="{{ asset('assets/js/jquery.3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.js') }}"></script>
        <script src="{{ asset('assets/js/light-bootstrap-dashboard.js') }}"></script>
</body>

</html>
