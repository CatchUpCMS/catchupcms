@if (count($menus))
    @set($menuSet, Theme::getSidebar())

    @if (isset($menus[$menuSet]) && !empty($menus[$menuSet]))
        @foreach($menus[$menuSet] as $menu)

            @set($render, array_get($menu, 'render_in', '_panel'))
            @set($view, 'sidebar-items.'.$render)

            {!! Theme::partial($view, compact('menu')) !!}

        @endforeach
    @endif
@endif
