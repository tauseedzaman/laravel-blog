<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/action.js') }}" defer></script>
<!-{{ $setup = App\Models\Setting::latest()->first() }}->
    <title>{{ $setup->title }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsome cdn -->
    <link rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous" />
    <link rel="icon" href="storage/{{ $setup ? $setup->favicon_path : ''  }}" type="image/x-icon">
    <link rel="shortcut icon" href="storage/{{ $setup ? $setup->favicon_path : '' }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @livewireScripts
    @livewireScripts
</head>
<body >
 <!-{{ $setup = App\Models\Setting::latest()->first() }}->
    <div class="container-float">
        <div class="row">
            <div class="col-lg-3 col-md-0 col-sm-0">

                <div class="left_sidebar position-fixed">
                    <a href="" class="close-btn btn btn-primary" id="close"><i
                            class="fas fa-times"></i></a>
                             <div class="web_name">
                        <h1 class=" bg-primary py-2 "  ><img class="img-circle rounded-circle " width="50px" height="50px" src="storage/{{ $setup ? $setup->logo_path : "logo" }}" alt=""> <b class="float-right pr-5 ">{{  $setup ? $setup->title : "Zaman Blog" }} </b></h1>
                    </div> <br>
                    <ul class="">
                        <li><a href="{{ url('/') }}" class="nav-link rounded border " id="nav-item">Posts</a></li>
                        <li><a href="{{ url('about')}}" class="nav-link rounded border " id="nav-item">About</a></li>
                        <li><a href="{{url('contact')}}" class="nav-link rounded border " id="nav-item">Contact</a></li>
                        @auth
                            @if (auth()->user()->is_admin)
                                <li><a href="{{ route('admin.settings') }}" class="nav-link rounded border  " id="nav-item">Admin</a></li>
                            @endif
                        @endauth
                        @guest
                            @if (Route::has('login'))
                                <li class="">
                                    <a class="nav-link rounded border " href="{{ route('login') }}" id="nav-item">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="">
                                    <a class="nav-link rounded border " href="{{ route('register') }}" id="nav-item">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="">
                                    <a class="nav-link rounded border" href="{{ route('logout') }}" id="nav-item"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>


                    <div class="subcribe py-5 px-2" >
                        @livewire('subscribe-now')
                    </div><br><br>
                    <div class="footer pt-5">
                        <p class="text-capitalize mt-5 ">
                            @copywrite powered by <b class="text-primary">hilal ahmad</b>
                        </p>
                    </div>
                </div>
            </div>
            @yield('content')
            <div class="col-xl-3 col-md-12 col-sm-0 gray-color">
                <div class="container-float">
                    <div class="right_sidebar">
                        <div class="col-12 inline-form">
                            <div class="">
                                <form action="{{route('search')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="search"
                                               placeholder="Search here..."
                                               id="search"
                                               class="form-control" style="">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="category">
                            <h3>Categories</h3>
                            <ul>
                        @forelse($categories as $category)
                             <li>
                                    <a href="{{ route('searchByCategory',$category->name) }}">{{$category->name}}

                                        <span>({{ $category->posts->count() }})</span>
                                    </a>
                                </li>
                        @empty
                             <li>
                                    <a href="#">No Category</a>
                                </li>
                        @endforelse


                            </ul>
                        </div>
                        <div class="latest_post mt-5">
                            <h3 class="mb-2">Latest Post</h3>
                            @livewire('latest-posts')
                        <div class="most_viewed_post mt-5">
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

    </div>
</body>
</html>
