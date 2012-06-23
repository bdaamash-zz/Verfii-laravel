<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('renters'); ?>">Renters</a> <span class="divider">/</span>
		</li>
		<li class="active">Viewing Renter</li>
	</ul>
</div>

<div class="span16">
<p>
	<strong>Name:</strong>
	<?php echo $renter->name; ?>
</p>
<p>
	<strong>Driver license number:</strong>
	<?php echo $renter->driver_license_number; ?>
</p>
<p>
	<strong>Driver license state:</strong>
	<?php echo $renter->driver_license_state; ?>
</p>
<p>
	<strong>Date of birth:</strong>
	<?php echo $renter->date_of_birth; ?>
</p>

<p><a href="<?php echo URL::to('renters/edit/'.$renter->id); ?>">Edit</a> | <a href="<?php echo URL::to('renters/delete/'.$renter->id); ?>" onclick="return confirm('Are you sure?')">Delete</a></p>