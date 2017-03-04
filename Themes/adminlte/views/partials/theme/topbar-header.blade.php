<ul class="nav navbar-nav navbar-right">
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
</ul>
