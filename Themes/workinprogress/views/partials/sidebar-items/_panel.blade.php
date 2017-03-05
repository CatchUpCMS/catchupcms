<div class="panel panel-default">
    <div class="panel-heading">
        <span class="panel-title">{{{ array_get($menu, 'title') }}}</span>
    </div>
    <div class="panel-body">
    @if (view()->exists(array_get($menu, 'view')))
        @include(array_get($menu, 'view'))
    @else
        <p>No view found for {{ array_get($menu, 'view') }}</p>
    @endif
    </div>
</div>
