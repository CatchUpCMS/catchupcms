@extends(sprintf('theme.%s::layouts.default', config('cms.core.app.themes.frontend')))

@section('layout-content')

<div class="site-container">
    {!! Theme::partial('theme.content') !!}
</div>

@stop
