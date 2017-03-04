<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('pxcms.admin.index') }}">
            {{ config('app.name') }}
        </a>
    </div>

    @if (!Auth::guest())
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->screenname }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ route('pxcms.pages.home') }}"><i class="fa fa-external-link fa-fw" target="_blank"></i> Site Home</a></li>
                <li><a href="{{ route('pxcms.user.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    @endif
</nav>

@if(!Auth::guest() && Auth::user()->isAdmin())
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        @menu('backend_sidebar')
    </div>
</nav>
@endif
