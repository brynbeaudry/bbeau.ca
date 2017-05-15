<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bryn Adrien Beaudry : Software Developer and Web Designer</title>

    <!-- Styles -->

    <link href="{{asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{asset('css/bbeau.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" />


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div id="header">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{ url('/') }}"><img class="nav-bar-icon navbar-brand" src="{{asset('images/xs_icon.gif')}}"/></a>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Bryn Beaudry
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <!--<li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> -->
                            <li><a href="{{ route('login') }}">Facebook</a></li>
                            <li><a href="{{ route('register') }}">LinkedIn</a></li>
                            <li><a href="{{ route('login') }}">Resume</a></li>
                            <li><a href="{{ route('register') }}">Contact</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('directive')

        


        @yield('content')
    </div>
    <!-- Footer -->
    <div id="footer">
        <div class="container 75%">

            <header class="major last">
                <h2>Questions or comments?</h2>
            </header>

            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor
                orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>

            <form method="post" action="#">
                <div class="row">
                    <div class="6u 12u(mobilep)">
                        <input type="text" name="name" placeholder="Name" />
                    </div>
                    <div class="6u 12u(mobilep)">
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <textarea name="message" placeholder="Message" rows="6"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" /></li>
                        </ul>
                    </div>
                </div>
            </form>

            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            </ul>

            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src=src="{{ asset('/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/js/skel.min.js')}}"></script>
    <script src="{{ asset('/js/util.js')}}"></script>
    <!--[if lte IE 8]><script src="{{ asset('/js/ie/respond.min.js')}}"></script><![endif]-->
    <script src="{{ asset('/js/main.js')}}"></script>
</body>
</html>
