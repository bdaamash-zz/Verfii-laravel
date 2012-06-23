<div class="span16">
	<ul class="breadcrumb span6">
		<li>
			<a href="<?php echo URL::to('users'); ?>">Users</a> <span class="divider">/</span>
		</li>
		<li class="active">Viewing User</li>
	</ul>
</div>

<div class="span16">
<p>
	<strong>Username:</strong>
	<?php echo $user->username; ?>
</p>
<p>
	<strong>Email:</strong>
	<?php echo $user->email; ?>
</p>
<p>
	<strong>First name:</strong>
	<?php echo $user->first_name; ?>
</p>
<p>
	<strong>Middle name:</strong>
	<?php echo $user->middle_name; ?>
</p>
<p>
	<strong>Last name:</strong>
	<?php echo $user->last_name; ?>
</p>

<p><a href="<?php echo URL::to('users/edit/'.$user->id); ?>">Edit</a> | <a href="<?php echo URL::to('users/delete/'.$user->id); ?>" onclick="return confirm('Are you sure?')">Delete</a></p>