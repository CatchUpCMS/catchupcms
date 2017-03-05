<div class="form">
{!! Former::horizontal_open()->action( route('pxcms.user.forgotpassword') ) !!}

    {!! Former::email('email')->required() !!}

    <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
            <button type="submit" class="btn btn-default btn-primary">Send Password Reset Link</button>
        </div>
    </div>

{!! Form::token() , Former::close() !!}
</div>
