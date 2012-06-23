<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('reports'); ?>">Reports</a> <span class="divider">/</span>
		</li>
		<li class="active">Editing Report</li>
	</ul>
</div>

<?php echo Form::open(null, 'post', array('class' => 'form-stacked')); ?>
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('title', 'Title'); ?>

			<div class="input">
				<?php echo Form::text('title', Input::old('title', $report->title), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('agreement_start_date', 'Agreement Start Date'); ?>

			<div class="input">
				<?php echo Form::text('agreement_start_date', Input::old('agreement_start_date', $report->agreement_start_date), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('agreement_end_date', 'Agreement End Date'); ?>

			<div class="input">
				<?php echo Form::text('agreement_end_date', Input::old('agreement_end_date', $report->agreement_end_date), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('message', 'Message'); ?>

			<div class="input">
				<?php echo Form::textarea('message', Input::old('message', $report->message), array('class' => 'span10')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('type', 'Type'); ?>

			<div class="input">
				<?php echo Form::text('type', Input::old('type', $report->type), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('renter_id', 'Renter Id'); ?>

			<div class="input">
				<?php echo Form::text('renter_id', Input::old('renter_id', $report->renter_id), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('company_id', 'Company Id'); ?>

			<div class="input">
				<?php echo Form::text('company_id', Input::old('company_id', $report->company_id), array('class' => 'span6')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('status', 'Status'); ?>

			<div class="input">
				<?php echo Form::text('status', Input::old('status', $report->status), array('class' => 'span6')); ?>
			</div>
		</div>

		<div class="actions">
			<?php echo Form::submit('Save', array('class' => 'btn primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>