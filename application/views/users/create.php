<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('admin/users'); ?>">Users</a> <span class="divider">/</span>
		</li>
		<li class="active">New User</li>
	</ul>
</div>

<?php echo Form::open(null, 'post', array('class' => 'form-stacked')); ?>
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('username', 'Username'); ?>

			<div class="input">
				<?php echo Form::text('username', Input::old('username'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('email', 'Email'); ?>

			<div class="input">
				<?php echo Form::text('email', Input::old('email'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('first_name', 'First Name'); ?>

			<div class="input">
				<?php echo Form::text('first_name', Input::old('first_name'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('middle_name', 'Middle Name'); ?>

			<div class="input">
				<?php echo Form::text('middle_name', Input::old('middle_name'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('last_name', 'Last Name'); ?>

			<div class="input">
				<?php echo Form::text('last_name', Input::old('last_name'), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('company', 'Company'); ?>

			<div class="input">
                <?php
                    $selectable_companies = array();
                    $companies = Company::all();
                    foreach ($companies as $company) {
                        $selectable_company = array($company->id => $company->name);
                        $selectable_companies[] = $selectable_company;
                    }
                    echo Form::select('company', $selectable_companies);
                ?>
			</div>
		</div>
        </div>

		<div class="actions">
			<?php echo Form::submit('Save', array('class' => 'btn primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
