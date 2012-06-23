<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('renters'); ?>">Renters</a> <span class="divider">/</span>
		</li>
		<li class="active">New Renter</li>
	</ul>
</div>

<?php echo Form::open(null, 'post', array('class' => 'form-stacked')); ?>
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('name', 'Name'); ?>

			<div class="input">
				<?php echo Form::text('name', Input::old('name'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('driver_license_number', 'Driver License Number'); ?>

			<div class="input">
				<?php echo Form::text('driver_license_number', Input::old('driver_license_number'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('driver_license_state', 'Driver License State'); ?>

			<div class="input">
				<?php echo Form::text('driver_license_state', Input::old('driver_license_state'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('date_of_birth', 'Date Of Birth'); ?>

			<div class="input">
				<?php echo Form::text('date_of_birth', Input::old('date_of_birth'), array('class' => 'span6')); ?>
			</div>
		</div>

		<div class="actions">
			<?php echo Form::submit('Save', array('class' => 'btn primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>