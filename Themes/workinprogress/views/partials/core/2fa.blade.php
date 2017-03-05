<div class="col-md-8 col-md-offset-2">
{!! Former::horizontal_open()->action(route('pxcms.user.2fa')) !!}

    <div class="page-header">
        <h2>{{ config('app.name') }} Login</h2>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">2 Factor Authentication</div>
        </div>
        <div class="panel-body">
            <div class="alert alert-warning">
                <strong>Warning:</strong> This account has 2 Factor Authentication enabled on it. You won't be able to proceed untill you input a valid code.
            </div>

            {!! Former::text('verify_2fa', '2 Factor Key')->required() !!}

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success pull-right">Validate Key</button>
                </div>
            </div>
        </div>
    </div>
{!! Form::token() , Former::close() !!}
</div>
