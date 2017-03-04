    <section class="content-header">
        <h1>{!! Theme::place('title') !!}</h1>
        <div class="row">
            <div class="col-md-12">
                @set($actions, Theme::getActions())
                @if(isset($actions['header']) && count($actions['header']))
                <div class="actions-menu pull-right">
                    @foreach($actions['header'] as $btn)

                        {!! build_helper_button($btn) !!}

                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-md-12">
            {!! Theme::partial('theme.msgs') !!}
        </div>
    </div>
