<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Syllabi Builder</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            background-color: lightgray;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .site-footer {
            background-color: #26272b;
            padding: 20px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
        }

        .copyright-text {
            margin: 0
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}"> {{ Auth::user()->department->name}}</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif


        <div class="content">
                <form action="{{route('universities')}}" method="get">
                    <button type="submit" class="learn-more ">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">view Syllabi</span>
                    </button>
                </form>

            <div class="title ">
                <img src="img/img3.jpg" alt="Welcome">
            </div>

        </div>

    </div>

    <!-- Site footer -->
    <footer class="site-footer">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12 flex-center">
                    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by

                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>


</html>