@extends(sprintf('theme.%s::layouts.default', config('cms.core.app.themes.frontend')))



@section('layout-content')

    <div class="site-container">
        <section class="homepage">
            <main class="content">
                This view is loaded from module: {!! config('relations.name') !!}
            </main>
        </section>
    </div>

@stop

