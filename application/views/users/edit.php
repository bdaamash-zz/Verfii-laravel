<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('admin/users'); ?>">Users</a> <span class="divider">/</span>
		</li>
		<li class="active">Editing User</li>
	</ul>
</div>

<?php echo Form::open(null, 'post', array('class' => 'form-stacked')); ?>
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('username', 'Username'); ?>

			<div class="input">
				<?php echo Form::text('username', Input::old('username', $user->username), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('email', 'Email'); ?>

			<div class="input">
				<?php echo Form::text('email', Input::old('email', $user->email), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('first_name', 'First Name'); ?>

			<div class="input">
				<?php echo Form::text('first_name', Input::old('first_name', $user->first_name), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('middle_name', 'Middle Name'); ?>

			<div class="input">
				<?php echo Form::text('middle_name', Input::old('middle_name', $user->middle_name), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('last_name', 'Last Name'); ?>

			<div class="input">
				<?php echo Form::text('last_name', Input::old('last_name', $user->last_name), array('class' => 'span6')); ?>
			</div>
		</div>

		<div class="actions">
			<?php echo Form::submit('Save', array('class' => 'btn primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
