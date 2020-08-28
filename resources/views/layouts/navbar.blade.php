<head>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

</head>
<nav class="navbar navbar-expand-md topnav" id="topnav">
    <div class="container">
        <a class="navbar-brand active" href="{{ url('/') }}">
            Home
        </a>

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
                    <a id="nav-link" class=" disabled nav-link" href="#" >
                        {{ Auth::user()->name }} <span class="caret"></span>
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
 