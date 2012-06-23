<?php if(count($users) == 0): ?>
	<p>No users.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->first_name; ?></td>
					<td><?php echo $user->middle_name; ?></td>
					<td><?php echo $user->last_name; ?></td>
					<td>
						<a href="<?php echo URL::to('admin/users/view/'.$user->id); ?>">View</a>
						<a href="<?php echo URL::to('admin/users/edit/'.$user->id); ?>">Edit</a>
						<a href="<?php echo URL::to('admin/users/delete/'.$user->id); ?>" onclick="return confirm('Are you sure?')">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<p><a class="btn success" href="<?php echo URL::to('admin/users/create'); ?>">Create new User</a></p>
