<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('companies'); ?>">Companies</a> <span class="divider">/</span>
		</li>
		<li class="active">New Company</li>
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
			<?php echo Form::label('address', 'Address'); ?>

			<div class="input">
				<?php echo Form::text('address', Input::old('address'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('city', 'City'); ?>

			<div class="input">
				<?php echo Form::text('city', Input::old('city'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('state', 'State'); ?>

			<div class="input">
				<?php echo Form::text('state', Input::old('state'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('zipcode', 'Zipcode'); ?>

			<div class="input">
				<?php echo Form::text('zipcode', Input::old('zipcode'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('phone', 'Phone'); ?>

			<div class="input">
				<?php echo Form::text('phone', Input::old('phone'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('email', 'Email'); ?>

			<div class="input">
				<?php echo Form::text('email', Input::old('email'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('fax', 'Fax'); ?>

			<div class="input">
				<?php echo Form::text('fax', Input::old('fax'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('date_joined', 'Date Joined'); ?>

			<div class="input">
				<?php echo Form::text('date_joined', Input::old('date_joined'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('contact_name', 'Contact Name'); ?>

			<div class="input">
				<?php echo Form::text('contact_name', Input::old('contact_name'), array('class' => 'span6')); ?>
			</div>
		</div>

		<div class="actions">
			<?php echo Form::submit('Save', array('class' => 'btn primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>