<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('admin/reports'); ?>">Reports</a> <span class="divider">/</span>
		</li>
		<li class="active">Viewing Report</li>
	</ul>
</div>

<div class="span16">
<p>
	<strong>Title:</strong>
	<?php echo $report->title; ?>
</p>
<p>
	<strong>Agreement start date:</strong>
	<?php echo $report->agreement_start_date; ?>
</p>
<p>
	<strong>Agreement end date:</strong>
	<?php echo $report->agreement_end_date; ?>
</p>
<p>
	<strong>Message:</strong>
	<?php echo $report->message; ?>
</p>
<p>
	<strong>Type:</strong>
	<?php echo $report->type; ?>
</p>
<p>
	<strong>Renter id:</strong>
	<?php echo $report->renter_id; ?>
</p>
<p>
	<strong>Company id:</strong>
	<?php echo $report->company_id; ?>
</p>
<p>
	<strong>Status:</strong>
	<?php echo $report->status; ?>
</p>

<p><a href="<?php echo URL::to('admin/reports/edit/'.$report->id); ?>">Edit</a> | <a href="<?php echo URL::to('admin/reports/delete/'.$report->id); ?>" onclick="return confirm('Are you sure?')">Delete</a></p>
