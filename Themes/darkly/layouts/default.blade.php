<!DOCTYPE html>
<html lang="en">
{!! Theme::partial('theme.head') !!}
<body class="{{ $currentRoute or '' }}">

<div id="wrapper">
    {!! Theme::partial('theme.header') !!}

    <div id="page-wrapper">
        {!! Theme::partial('theme.inside-header') !!}
        @yield('layout-content')
    </div>
</div>

{!! Theme::partial('theme.modal') !!}

{!! Theme::asset()->container('footer')->scripts() !!}
@yield('scripts')
@yield('layout-scripts')

</body>
</html>
