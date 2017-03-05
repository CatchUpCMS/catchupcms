@extends(sprintf('theme.%s::layouts.default', config('cms.core.app.themes.frontend')))

@section('layout-content')

<div class="site-container">
    <section class="two-column-left">
        <aside class="sidebar sidebar-left">
            {!! Theme::partial('theme.sidebar-left') !!}
        </aside>

        <main class="content">
            {!! Theme::partial('theme.msgs') !!}
            {!! Theme::partial('theme.heading') !!}
            {!! Theme::partial('theme.content') !!}
        </main>
    </section>
</div>
@stop
