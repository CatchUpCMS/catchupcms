    <div class="page-header">
        <?php $actions = Theme::getActions(); ?>
        @if( isset($actions['header']) && count($actions['header']) )
        <div class="actions-menu pull-right">
            @foreach($actions['header'] as $btn)

                {!! build_helper_button($btn) !!}

            @endforeach
        </div>
        @endif
        <h1>{!! Theme::place('title') !!}</h1>
    </div>
    {!! Theme::partial('theme.msgs') !!}
