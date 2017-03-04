{!! Former::horizontal_open()->action(route('pxcms.user.login')) !!}

    {!! Former::text('email', 'Email')->required() !!}
    {!! Former::password('password', 'Password')->required() !!}

    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember Me </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-success">Login</button>
            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
        </div>
    </div>
{!! Form::token() , Former::close() !!}
