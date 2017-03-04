<div class="col-md-8 col-md-offset-2">
    <div class="page-header">
        <h2>{{ config('app.name') }} Login</h2>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Please Sign In
                <a href="{{ route('pxcms.user.register') }}" class="btn btn-default btn-sm pull-right">Register</a>
            </div>
        </div>
        <div class="panel-body">
            <h4>Direct Login</h4>
            {!! Theme::partial('core._login_form') !!}
        </div>
    </div>

</div>
