@extends(sprintf('theme.%s::layouts.default', config('cms.core.app.themes.frontend')))

@section('layout-content')
    {!! Theme::partial('theme.content') !!}
@stop
