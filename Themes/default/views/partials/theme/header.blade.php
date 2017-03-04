<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            @menu('main-menu')

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('pxcms.user.login') }}">Login</a></li>
                    <li><a href="{{ route('pxcms.user.register') }}">Register</a></li>
                @else
                <li class="hidden-xs"><img src="{{ Auth::user()->avatar }}" class="img-circle" style="height: 48px; width: 48px;" alt=""></li>
                <li><a href="{{ route('pxcms.user.logout') }}">{{ 'Logout ['.Auth::user()->screenname.']' }}</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>
