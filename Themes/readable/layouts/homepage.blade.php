@extends(sprintf('theme.%s::layouts.default', config('cms.core.app.themes.frontend')))

@section('layout-content')

<div class="site-container">
    {!! Theme::partial('theme.msgs') !!}
    {!! Theme::partial('theme.heading') !!}
    <section class="homepage">
        <main class="content">
            {!! Theme::partial('theme.content') !!}
        </main>
    </section>
</div>

@stop
