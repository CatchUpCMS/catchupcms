<!DOCTYPE html>
<html lang="en">
{!! Theme::partial('theme.head') !!}
<body class="skin-blue fixed {{ $currentRoute or '' }}">

<div class="wrapper">
    {!! Theme::partial('theme.header') !!}

    <div class="content-wrapper">
        {!! Theme::partial('theme.inside-header') !!}

        <section class="content">
            @yield('layout-content')
        </section>
    </div>

    {!! Theme::partial('theme.footer') !!}
</div>

{!! Theme::partial('theme.modal') !!}

{!! Theme::asset()->container('footer')->scripts() !!}
@yield('scripts')
@yield('layout-scripts')

</body>
</html>
