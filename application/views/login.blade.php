<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('#'); ?>">Register New User</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo URL::to('#'); ?>">Forgot Password</a> <span class="divider">/</span>
		</li>
		<li class="active">Login</li>
	</ul>
</div>

{{ Form::open('login', 'post', array('class' => 'form-stacked')) }}
    @if (Session::has('login_errors'))
        <span class="error">Username or password incorrect.</span>
    @endif
    <fieldset>
        <div class="clearfix">
            <p>{{ Form::label('username', 'Username') }}</p>
            <div class="input">
                <p>{{ Form::text('username', Input::old('username'), array('class' => 'span6')) }}</p>
            </div>
        </div>
        <div class="clearfix">
            <p>{{ Form::label('password', 'Password') }}</p>
            <div class="input">
                <p>{{ Form::text('password', Input::old('password'), array('class' => 'span6')) }}</p>
            </div>
        </div>

        <div class="actions">
            </p>{{ Form::submit('Login', array('class' => 'btn primary')) }}</p>
        </div>
    </fieldset>
{{ Form::close() }}
