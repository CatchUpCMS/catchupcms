<ul class="nav navbar-nav">
    <li><a href="{{ route('pxcms.pages.home') }}"><i class="fa fa-home"></i></a></li>
    <li><a href="{{ route('pxcms.forum.index') }}">Forum</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    @if(Auth::guest())
        <li><a href="{{ route('pxcms.user.login') }}">Login</a></li>
        <li><a href="{{ route('pxcms.user.register') }}">Register</a></li>
    @else
    <li class="hidden-xs"><img src="{{ Auth::user()->avatar }}" class="img-circle" style="height: 48px; width: 48px;" alt=""></li>
    <li><a href="{{ route('pxcms.user.logout') }}">{{ 'Logout ['.Auth::user()->screenname.']' }}</a></li>
    @endif
</ul>
