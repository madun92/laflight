<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/back.css') }}" rel="stylesheet">
</head>
<body class="skin-default fixed-menu">
    {{-- <div id="app"> --}}
        <header class="header">
            <nav class="navbar navbar-fixed-top" role="navigation">
                <a href="index.html" class="logo">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <img src="{{url('img/logo.png')}}" alt="logo"/>
                </a>
                <!-- Header Navbar: style can be found in header-->
                <!-- Sidebar toggle button-->
                <!-- Sidebar toggle button-->
                <div>
                    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                        class="fa fa-fw ti-menu"></i>
                    </a>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw ti-email black"></i>
                                <span class="label label-success">2</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages table-striped">
                                <li class="dropdown-title">New Messages</li>
                                <li>
                                    <a href="" class="message striped-col">
                                        <img class="message-image img-circle" src="img/authors/avatar7.jpg" alt="avatar-image">

                                        <div class="message-body"><strong>Ernest Kerry</strong>
                                            <br>
                                            Can we Meet?
                                            <br>
                                            <small>Just Now</small>
                                            <span class="label label-success label-mini msg-lable">New</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message">
                                        <img class="message-image img-circle" src="img/authors/avatar6.jpg" alt="avatar-image">

                                        <div class="message-body"><strong>John</strong>
                                            <br>
                                            Dont forgot to call...
                                            <br>
                                            <small>5 minutes ago</small>
                                            <span class="label label-success label-mini msg-lable">New</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message striped-col">
                                        <img class="message-image img-circle" src="img/authors/avatar5.jpg" alt="avatar-image">

                                        <div class="message-body">
                                            <strong>Wilton Zeph</strong>
                                            <br>
                                            If there is anything else &hellip;
                                            <br>
                                            <small>14/10/2014 1:31 pm</small>
                                        </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message">
                                        <img class="message-image img-circle" src="img/authors/avatar1.jpg" alt="avatar-image">
                                        <div class="message-body">
                                            <strong>Jenny Kerry</strong>
                                            <br>
                                            Let me know when you free
                                            <br>
                                            <small>5 days ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="message striped-col">
                                        <img class="message-image img-circle" src="img/authors/avatar.jpg" alt="avatar-image">
                                        <div class="message-body">
                                            <strong>Tony</strong>
                                            <br>
                                            Let me know when you free
                                            <br>
                                            <small>5 days ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer"><a href="#">View All messages</a></li>
                            </ul>

                        </li>
                        <!--rightside toggle-->
                        <li>
                            <a href="#" class="dropdown-toggle toggle-right">
                                <i class="fa fa-fw ti-view-list black"></i>
                                <span class="label label-danger">9</span>
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                                <img src="img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left"
                                height="35" alt="User Image">
                                <div class="riot">
                                    <div>
                                        Addison
                                        <span>
                                            <i class="caret"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                                    <p> Addison</p>
                                </li>
                                <!-- Menu Body -->
                                <li class="p-t-3">
                                    <a href="user_profile.html">
                                        <i class="fa fa-fw ti-user"></i> My Profile
                                    </a>
                                </li>
                                <li role="presentation"></li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw ti-settings"></i> Account Settings
                                    </a>
                                </li>
                                <li role="presentation" class="divider"></li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="lockscreen.html">
                                            <i class="fa fa-fw ti-lock"></i>
                                            Lock
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="login.html">
                                            <i class="fa fa-fw ti-shift-right"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        {{-- <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
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
    </nav> --}}
<div class="wrapper row-offcanvas row-offcanvas-left">
    @include('back.partials.sidebar')
<aside class="right-side">
    <section class="content-header">
        <h1>Simple Tables</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="fa fa-fw ti-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">DataTables</a>
            </li>
            <li class="active">
                Simple Tables
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
    @yield('content')
        </div>
    </section>

</aside>
</div>
{{-- </div> --}}

<!-- Scripts -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
