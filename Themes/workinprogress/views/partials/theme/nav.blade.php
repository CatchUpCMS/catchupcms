    <li><a href="/"><i class="fa fa-home"></i></a></li>

    @if(Auth::guest())
    <li><a href="{{ route('pxcms.user.login') }}">Login</a></li>
    <li><a href="{{ route('pxcms.user.register') }}">Register</a></li>
    @else
    <li><a href="{{ route('pxcms.user.logout') }}">{{ 'Logout ['.Auth::user()->screenname.']' }}</a></li>
    @endif
