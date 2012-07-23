{{ Form::open('login') }}
    @if (Session::has('login_errors'))
        <span class="error">Username or password incorrect.</span>
    @endif

    <p>{{ Form::label('username', 'Username') }}</p>
    <p>{{ Form::text('username') }}</p>

    <p>{{ Form::label('password', 'Password') }}</p>
    <p>{{ Form::text('password') }}</p>

    </p>{{ Form::submit('login') }}</p>
{{ Form::close() }}
