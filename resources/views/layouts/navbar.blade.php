<head>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button2.css') }}" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-md topnav" id="topnav">
    <div class="container">
        <form action="/"  >
            <button type="submit" class="learn-more " >
                <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                </span>
                <span class="button-text text-white">Home</span>
            </button>
        </form>
       

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto leftnav">
                @can('user-management')
                <a class="navbar-brand" href="{{ url('/admin/users') }}">
                    User Management
                </a>
                @endcan
                @can('shareOnline-syllabus')
                <a class="navbar-brand" href="{{ url('/admin/syllabi') }}">
                    Share Syllabi
                </a>
                @endcan

                @can('destribute-courses')
                <a class="navbar-brand" href="{{ url('/supervisor/courses') }}">
                    Destribute Courses
                </a>
                @endcan
                @can('build-syllabus')
                <a class="navbar-brand" href="{{ url('/builder/syllabi') }}">
                    Syllabus
                </a>
                @endcan
                @can('validate-syllabus')
                <a class="navbar-brand" href="{{ url('/validator/syllabi') }}">
                    Validate
                </a>
                @endcan
                @can('confirm-syllabus')
                <a class="navbar-brand" href="{{ url('/supervisor/confirmations') }}">
                    Confirm Syllabus
                </a>
                @endcan
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
                <a id="nav-link" class=" disabled nav-link" href="#">
                    <small>{{ Auth::user()->name}}</small>
                </a>
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ Auth::user()->department->name}}
                </a>

                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>


                @endguest
            </ul>
        </div>
    </div>
</nav>