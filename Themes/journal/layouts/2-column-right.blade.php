@extends(sprintf('theme.%s::layouts.default', config('cms.core.app.themes.frontend')))

@section('layout-content')

    <section class="two-column-right">
        <main class="content">
            {!! Theme::partial('theme.msgs') !!}
            {!! Theme::partial('theme.heading') !!}
            {!! Theme::partial('theme.content') !!}
        </main>

        <aside class="sidebar sidebar-right">
            {!! Theme::partial('theme.sidebar-right') !!}
        </aside>
    </section>

@stop
