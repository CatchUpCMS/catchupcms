<header class="main-header">
    <a href="{{ route('pxcms.admin.index') }}" class="logo">{{ config('app.name') }}</a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </a>
        <ul class="nav navbar-nav nav-left">
            <li><a href="/">View Frontend</a></li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            @if (!Auth::guest())
              @menu('main-menu')
            @endif

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('pxcms.user.login') }}">Login</a></li>
                    <li><a href="{{ route('pxcms.user.register') }}">Register</a></li>
                @else
                <li class="hidden-xs"><img src="{{ Auth::user()->avatar }}" class="img-circle" style="height: 48px; width: 48px;" alt=""></li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ Auth::user()->avatar }}" class="user-image" alt="{{ Auth::user()->screenname }}'s Avatar"/>
                        <span class="hidden-xs">{{ Auth::user()->screenname }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="{{ Auth::user()->screenname }}'s Avatar" />
                            <p>
                                {{ Auth::user()->screenname }}
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{ route('pxcms.user.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
@if(!Auth::guest() && Auth::user()->isAdmin())
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="{{ Auth::user()->screenname }}'s Avatar">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->screenname }}</p>
                <small><i class="fa fa-circle text-success"></i> Online</small>
            </div>
        </div>
        @menu('backend_sidebar')
    </section>
</aside>
@endif
