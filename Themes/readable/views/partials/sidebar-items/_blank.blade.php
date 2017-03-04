@if (view()->exists(array_get($menu, 'view')))
    @include(array_get($menu, 'view'))
@else
    <p>No view found for {{ array_get($menu, 'view') }}</p>
@endif
