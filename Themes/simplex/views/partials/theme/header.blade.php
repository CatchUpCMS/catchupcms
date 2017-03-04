<header>
    <div id="topbar" class="container">
        <div class="logo">Cysha Community</div>
    </div>

    <nav class="navbar navbar-dark" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="menu">MENU</span>
                    <div class="bars">
                        <i class="fa fa-bars"></i>
                    </div>
                </button>
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
        </div>
    </nav>
</header>
