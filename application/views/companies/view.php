<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('admin/companies'); ?>">Companies</a> <span class="divider">/</span>
		</li>
		<li class="active">Viewing Company</li>
	</ul>
</div>

<div class="span16">
<p>
	<strong>Name:</strong>
	<?php echo $company->name; ?>
</p>
<p>
	<strong>Address:</strong>
	<?php echo $company->address; ?>
</p>
<p>
	<strong>City:</strong>
	<?php echo $company->city; ?>
</p>
<p>
	<strong>State:</strong>
	<?php echo $company->state; ?>
</p>
<p>
	<strong>Zipcode:</strong>
	<?php echo $company->zipcode; ?>
</p>
<p>
	<strong>Phone:</strong>
	<?php echo $company->phone; ?>
</p>
<p>
	<strong>Email:</strong>
	<?php echo $company->email; ?>
</p>
<p>
	<strong>Fax:</strong>
	<?php echo $company->fax; ?>
</p>
<p>
	<strong>Date joined:</strong>
	<?php echo $company->date_joined; ?>
</p>
<p>
	<strong>Contact name:</strong>
	<?php echo $company->contact_name; ?>
</p>

<p><a href="<?php echo URL::to('admin/companies/edit/'.$company->id); ?>">Edit</a> | <a href="<?php echo URL::to('admin/companies/delete/'.$company->id); ?>" onclick="return confirm('Are you sure?')">Delete</a></p>
