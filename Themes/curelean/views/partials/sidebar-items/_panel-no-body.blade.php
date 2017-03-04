<div class="panel panel-default">
    <div class="panel-heading">
        <span class="panel-title">{{{ array_get($menu, 'title') }}}</span>
    </div>
    @if (view()->exists(array_get($menu, 'view')))
        @include(array_get($menu, 'view'))
    @else
    <div class="panel-body">
        <p>No view found for {{ array_get($menu, 'view') }}</p>
    </div>
    @endif
</div>
