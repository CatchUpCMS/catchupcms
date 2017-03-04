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
        <div class="navbar-custom-menu">
            @if (!Auth::guest())
                {!! Theme::partial('theme.topbar-header') !!}
            @endif
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
